@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            This is module {{ $module->module_number }} : {{ $module->title }} of course {{ $paid_course->id }} :
            {{ $paid_course->title }}
            <div class="container-fluid mt-4">
                <h3 class="text-center">What we have learnt in this module</h3>
                {!! nl2br(e($module->covered_topics)) !!}
            </div>

            <div class="container-fluid mt-4">
                <h3 class="text-center">Uploaded Videos</h3>
                {{-- @foreach ($videos as $video)
                    <div>
                        <h5>{{ $video->video_title }}</h5>
                        @if ($video->file)
                            <video width="320" height="240" controls>
                                <source src="{{ asset('uploads/' . $video->file) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                @endforeach --}}
            </div>

            <div class="container-fluid mt-4">
                <h3 class="text-center">Resources</h3>
            </div>

            <div class="container-fluid mt-4">
                <h3 class="text-center">
                    =======================
                </h3>
            </div>

            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->role === 'admin')
                        <div class="upload-module-topics mt-4">
                            <form action="{{ route('uploadModuleTitle', ['module_id' => $module->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center">Upload Module Topics Part</h3>
                                <div class="form-group">
                                    <textarea class="form-control" name="covered_topics" id="covered_topics" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload Topics</button>
                            </form>
                        </div>

                        <div>
                            <form action="{{ route('uploadModuleVideo', ['module_id' => $module->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center">Pre Recorded Video Upload</h3>
                                <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                                <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">
                                <div class="form-group">
                                    <label for="video_title">Video Title </label>
                                    <input type="text" name="video_title" id="video_title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Video : </label>
                                    <input type="file" name="image" id="image" class="form-control" accept="video/*"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        <div>
                            <form action="{{ route('uploadResources', ['module_id' => $module->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center">Resources Upload</h3>
                                <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                                <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">
                                <div class="form-group">
                                    <label for="image">Select File:</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="url">Enter URL:</label>
                                    <input type="text" name="url" id="url" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        <div class="upload-module-topics mt-4">
                            <form action="{{ route('uploadAssignmentTopics', ['module_id' => $module->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center">Upload Assignment Topics Part</h3>
                                <div class="form-group">
                                    <textarea class="form-control" name="assignment_topics" id="assignment_topics" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload Topics</button>
                            </form>
                        </div>
                    @endif
                @endauth
            @endif

            <div class="upload-assignment mt-4">
                <form action="{{ route('uploadFile', ['module_id' => $module->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center">Assignment Part</h3>
                    <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                    <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">

                    <div class="form-group">
                        <label for="image">Select Image:</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
