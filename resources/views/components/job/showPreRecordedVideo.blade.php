@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <h3 class="text-center">Uploaded Videos</h3>
            <div class="col-lg-9 video-show-section">
                @if (isset($video))
                    <iframe id="video-player" src="{{ asset('uploads/' . $video->file) }}" frameborder="0" width="100%"
                        height="400" controlsList="nodownload"></iframe>
                @endif
                <div class="d-flex justify-content-between align-items-center my-2">
                    @if (isset($prevVideo))
                        <a href="{{ route('viewModuleVideo', ['courseName' => urlencode($paid_course->title), 'moduleNumber' => $module->module_number, 'encryptedModuleId' => encrypt($module->id), 'videoNumber' => $prevVideo->video_number, 'videoId' => $prevVideo->id]) }}"
                            class="btn btn-secondary">Previous</a>
                    @endif
                    <div class="ml-auto">
                        @if (isset($nextVideo))
                            <a href="{{ route('viewModuleVideo', ['courseName' => urlencode($paid_course->title), 'moduleNumber' => $module->module_number, 'encryptedModuleId' => encrypt($module->id), 'videoNumber' => $nextVideo->video_number, 'videoId' => $nextVideo->id]) }}"
                                class="btn btn-secondary">Next</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @foreach ($videos->sortBy('video_number') as $video)
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p>{{ $video->video_number }} : {{ $video->video_title }}</p>
                        <a
                            href="{{ route('viewModuleVideo', ['courseName' => urlencode($paid_course->title), 'moduleNumber' => $module->module_number, 'encryptedModuleId' => encrypt($module->id), 'videoNumber' => $video->video_number, 'videoId' => $video->id]) }}">View</a>
                        <form style="margin: 0; padding:0;"
                            action="{{ route('delete_module_video', ['moduleId' => $module->id, 'encryptedId' => encrypt($paid_course->id), 'videoId' => $video->id]) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                        <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                            data-bs-target="#update-pre-recorded-video-{{ $video->id }}"
                            data-member-id="{{ $video->id }}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <div class="modal fade" id="update-pre-recorded-video-{{ $video->id }}" aria-hidden="true"
                            aria-labelledby="update-pre-recorded-video-{{ $video->id }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header"
                                        style="margin: 0; padding-top: 0; padding-bottom: 0; padding-right:2rem; box-sizing:border-box">
                                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                        <h2>Update</h2>
                                        <button type="button" class="btn" data-bs-dismiss="modal"
                                            aria-label="Close">X</button>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="{{ route('job_preparation.update_module_video', ['encryptedId' => encrypt($paid_course->id)]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="video_number">Video Number:</label>
                                                <input type="number" name="video_number" class="form-control"
                                                    value="{{ $video->video_number }}" min="1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="video_title">Video Title:</label>
                                                <input type="text" name="video_title" class="form-control"
                                                    value="{{ $video->video_title }}" required>
                                            </div>
                                            <input type="hidden" name="video_id" value="{{ encrypt($video->id) }}">
                                            <input type="hidden" name="module_id" value="{{ encrypt($module->id) }}">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
