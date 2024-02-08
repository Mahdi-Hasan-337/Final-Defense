@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <h3 class="text-center">Uploaded Resources</h3>

            <div class="">
                @foreach ($resources->sortBy('resource_number') as $resource)
                    <div class="d-flex align-items-center">
                        {{ $resource->resource_number }}

                        @if (!empty($resource->file) && !empty($resource->url))
                            <a href="{{ $resource->url }}" target="_blank" class="btn btn-primary">Open Link</a>

                            <a href="{{ asset('uploads/' . $resource->file) }}" target="_blank"
                                class="btn btn-primary">View</a>
                            <a href="{{ asset('uploads/' . $resource->file) }}" download="{{ $resource->file }}"
                                class="btn btn-primary">Download File</a>
                        @elseif (!empty($resource->file))
                            <a href="{{ asset('uploads/' . $resource->file) }}" target="_blank"
                                class="btn btn-primary">View</a>
                            <a href="{{ asset('uploads/' . $resource->file) }}" download="{{ $resource->file }}"
                                class="btn btn-primary">Download File</a>
                        @elseif (!empty($resource->url))
                            <a href="{{ $resource->url }}" target="_blank" class="btn btn-primary">Open Link</a>
                        @else
                            <span class="text-danger">Unsupported resource type</span>
                        @endif

                        <form style="margin: 0; padding:0;"
                            action="{{ route('delete_module_resource', ['moduleId' => $module->id, 'encryptedId' => encrypt($paid_course->id), 'resourceId' => $resource->id]) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class=""><i class="fa-solid fa-trash"></i></button>
                        </form>
                        <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                            data-bs-target="#update-resources-{{ $resource->id }}" data-member-id="{{ $resource->id }}">
                            <i class="fas fa fa-edit"></i>
                        </button>
                        <div class="modal fade" id="update-resources-{{ $resource->id }}" aria-hidden="true"
                            aria-labelledby="update-resources-{{ $resource->id }}" tabindex="-1">
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
                                            action="{{ route('job_preparation.update_module_resource', ['encryptedId' => encrypt($paid_course->id)]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="resource_number">Rresource number:</label>
                                                <input type="number" name="resource_number" class="form-control"
                                                    value="{{ $resource->resource_number }}" min="1" required>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="url">Resource URL:</label>
                                                <input type="text" name="url" class="form-control"
                                                    value="{{ $resource->url }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Upload File:</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div> --}}

                                            <input type="hidden" name="resource_id" value="{{ encrypt($resource->id) }}">
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
