<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Module;
use App\Models\Paid_course;
use App\Models\PreRecordedVideo;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ModuleController extends Controller {
    public function showModule($courseName, $moduleNumber, $encryptedModuleId) {
        $moduleId = Crypt::decrypt($encryptedModuleId);

        $module = Module::where('id', $moduleId)->orderBy('module_number')->firstOrFail();

        $videos = Resource::where('module_id', $module->id)->get();

        $paid_course = $module->paidCourse;

        return view('components.job.module', compact('module', 'paid_course', 'videos'));
    }

    public function storeModule(Request $request, $encryptedId) {
        $paid_course = Paid_course::findOrFail(Crypt::decrypt($encryptedId));

        $moduleNumber = $paid_course->modules()->count() + 1;

        Module::create([
            'paid_course_id' => $paid_course->id,
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'module_number' => $moduleNumber,
        ]);

        return redirect()->route('job_preparation.show', $encryptedId)->with('success', 'Module added successfully!');
    }

    public function storeExtraModule(Request $request, $encryptedId) {
        $paidCourseId = decrypt($encryptedId);
        $moduleNumber = $request->input('module_number');

        $existingModule = Module::where('paid_course_id', $paidCourseId)
            ->where('module_number', $moduleNumber)
            ->first();

        if (!$existingModule) {
            return redirect()->back()->with('error', 'Module with this number not exists exists. Please choose a different module number.');
        }

        Module::where('paid_course_id', $paidCourseId)
            ->where('module_number', '>=', $moduleNumber)
            ->increment('module_number');

        Module::create([
            'paid_course_id' => $paidCourseId,
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'module_number' => $moduleNumber + 1,
        ]);

        Module::reSerializeModuleNumbers($paidCourseId);

        return redirect()->route('job_preparation.show', $encryptedId)->with('success', 'Module added successfully!');
    }

    public function storeTitle(Request $request, $module_id) {
        $request->validate([
            'covered_topics' => 'required|string',
        ]);

        $module = Module::findOrFail($module_id);
        $module->covered_topics = $request->input('covered_topics');
        $module->save();

        return redirect()->back()->with('success', 'Module title updated successfully!');
    }

    public function storeAssignmentTopics(Request $request, $module_id) {
        $request->validate([
            'assignment_topics' => 'required|string',
        ]);

        $module = Module::findOrFail($module_id);
        $module->assignment_topics = $request->input('assignment_topics');
        $module->save();

        return redirect()->back()->with('success', 'Module title updated successfully!');
    }

    public function storeVideo(Request $request, $module_id) {

        $request->validate([
            'video_title' => 'required|string',
            'image' => 'required|mimes:mp4,mov,avi|max:2048',
        ]);

        $module = Module::findorfail($module_id);

        $videoNumber = $module->pre_recorded_videos()->count() + 1;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileNameToStore = 'recorded_video_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $fileNameToStore);
        }

        PreRecordedVideo::create([
            'user_id' => auth()->user()->id,
            'module_id' => $request->module_id,
            'module_number' => $request->module_number_id,
            'paid_course_id' => $request->paid_course_id,
            'file' => $request->hasFile('image') ? $fileNameToStore : '',
            'video_title' => $request->video_title,
            'video_number' => $videoNumber,
        ]);

        return redirect()->back()->with('success', 'Video Uploaded Successfully!');
    }

    public function storeResources(Request $request, $module_id) {

        $module = Module::findorfail($module_id);

        $resourceNumber = $module->resources()->count() + 1;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileNameToStore = 'resources_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $fileNameToStore);
        }

        Resource::create([
            'user_id' => auth()->user()->id,
            'module_id' => $request->module_id,
            'module_number' => $request->module_number_id,
            'paid_course_id' => $request->paid_course_id,
            'file' => $request->hasFile('image') ? $fileNameToStore : '',
            'url' => $request->url,
            'resource_number' => $resourceNumber,
        ]);

        return redirect()->back()->with('success', 'Resource Uploaded Successfully!');
    }

    public function deleteModule($moduleId, $encryptedId) {
        $module = Module::findOrFail($moduleId);
        $paidCourseId = $module->paid_course_id;

        $videos = $module->pre_recorded_videos;

        foreach ($videos as $video) {
            if (!empty($video->file)) {
                $filePath = public_path('uploads/' . $video->file);

                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }
        $module->delete();

        Module::reSerializeModuleNumbers($paidCourseId);

        return redirect()->route('job_preparation.show', $encryptedId)->with('success', 'Module deleted successfully!');
    }

    public function updateIsLocked($moduleId, $encryptedId) {
        $courseId = decrypt($encryptedId);

        $module = Module::findOrFail($moduleId);

        $module->is_locked = $module->is_locked == 1 ? 0 : 1;

        $module->save();

        return redirect()->back();
    }

    public function assignment(Request $request) {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,mp3,wav,mp4,mov,avi|max:2048',
        ]);

        $module = Module::findorfail($request->module_id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileNameToStore = 'assignment_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $fileNameToStore);
        }

        Assignment::create([
            'user_id' => auth()->user()->id,
            'module_id' => $request->module_id,
            'module_number' => $request->module_number_id,
            'paid_course_id' => $request->paid_course_id,
            'file' => $request->hasFile('image') ? $fileNameToStore : '',
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
}