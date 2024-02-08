@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container-fluid mt-4">
        <div class="row">
            This is module {{ $module->module_number }} : {{ $module->title }} of course {{ $paid_course->id }} :
            {{ $paid_course->title }}
            <div class="container-fluid mt-4">
                <h3 class="text-center">What we have learnt in this module</h3>
                {!! nl2br(e($module->covered_topics)) !!}
            </div>
            <a href="{{ route('showModuleVideo', ['courseName' => urlencode($paid_course->title), 'moduleNumber' => $module->module_number, 'encryptedModuleId' => encrypt($module->id)]) }}"
                class="btn btn-primary">Uploaded Videos</a>

            <a href="{{ route('showModuleResource', ['courseName' => urlencode($paid_course->title), 'moduleNumber' => $module->module_number, 'encryptedModuleId' => encrypt($module->id)]) }}"
                class="btn btn-primary">Uploaded Resources</a>

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

                        <div class="row">
                            <div class="col-lg-6">
                                <form action="{{ route('uploadModuleVideo', ['module_id' => $module->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="text-center">Pre Recorded Video Upload</h3>
                                    <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                                    <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">
                                    <div class="form-group">
                                        <label for="video_title">Video Title </label>
                                        <input type="text" name="video_title" id="video_title" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Upload Video : </label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            accept="video/*" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form action="{{ route('uploadExtraModuleVideo', ['module_id' => $module->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="text-center">Extra Video Upload</h3>
                                    <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                                    <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">
                                    <div class="form-group">
                                        <label for="video_title">Video Title </label>
                                        <input type="text" name="video_title" id="video_title" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Upload Video : </label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            accept="video/*" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="video_number">in which position You want to store? :</label>
                                        <input type="number" name="video_number" class="form-control" min="1"
                                            required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <form action="{{ route('uploadResources', ['module_id' => $module->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="text-center">Resources Upload</h3>
                                    <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                                    <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">
                                    <div class="form-group">
                                        <label for="image">Select File:</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Enter URL:</label>
                                        <input type="text" name="url" id="url" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form action="{{ route('uploadExtraResources', ['module_id' => $module->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="text-center">Extra Resources Upload</h3>
                                    <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                                    <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">
                                    <div class="form-group">
                                        <label for="image">Select File:</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Enter URL:</label>
                                        <input type="text" name="url" id="url" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="resource_number">in which position You want to store? :</label>
                                        <input type="number" name="resource_number" class="form-control" min="1"
                                            required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
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

            <div class="row">
                <h1 class="text-center mb-5">Assignment</h1>
                <div class="col-md-12 col-sm-12 col-lg-9">
                    <h5>Topics</h5>
                    <p> {!! nl2br(e($module->assignment_topics)) !!}</p>
                </div>
                <div class="upload-assignment col-md-12 col-sm-12 col-lg-3">
                    <h5>Submit Your Assignment</h5>
                    <form style="margin: 0; padding:0;" action="{{ route('uploadFile', ['module_id' => $module->id]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="paid_course_id" value="{{ $paid_course->id }}">
                        <input type="hidden" name="module_number_id" value="{{ $module->module_number }}">

                        <div class="form-group">
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>

                        <button type="submit" class="col-12 mt-2 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
