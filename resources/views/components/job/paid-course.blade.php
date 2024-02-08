@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->has('module_number_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('module_number_id') }}
            </div>
        @endif

        @if (Route::has('login'))
            @auth
                @if (Auth::user()->role === 'admin')
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('job_preparation.storeModule', $encryptedId) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Module Title:</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Module Content:</label>
                                    <textarea name="content" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="covered_topics" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Module</button>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <form action="{{ route('job_preparation.storeExtraModule', $encryptedId) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Module Title:</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Module Content:</label>
                                    <textarea name="content" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="module_number">After which You want to store? :</label>
                                    <input type="number" name="module_number" class="form-control" min="1" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="covered_topics" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Extra Module</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endauth
        @endif

        This is paid course {{ $paid_course->id }}

        <div class="row">
            @foreach ($modules->sortBy('module_number') as $module)
                <div class="col-md-4 pt-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="card-title">{{ $module->content }}</h3>
                                <br>
                                <h3 class="card-title">{{ $module->title }}</h3>
                                <h3 class="card-title">{{ $module->module_number }}</h3>
                                <form
                                    action="{{ route('delete_module', ['moduleId' => $module->id, 'encryptedId' => encrypt($paid_course->id)]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                            <form
                                action="{{ route('update_is_locked', ['moduleId' => $module->id, 'encryptedId' => encrypt($paid_course->id)]) }}"
                                method="post">
                                @csrf
                                <button type="submit"
                                    class="btn btn-{{ $module->is_locked == 1 ? 'danger' : 'primary' }}">
                                    {{ $module->is_locked == 1 ? 'Disable' : 'Enable' }}
                                </button>
                            </form>
                            <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                                data-bs-target="#update-paid-courses-module-{{ $module->id }}"
                                data-member-id="{{ $module->id }}">
                                Update
                            </button>
                            <div class="modal fade" id="update-paid-courses-module-{{ $module->id }}" aria-hidden="true"
                                aria-labelledby="update-paid-courses-module-{{ $module->id }}" tabindex="-1">
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
                                                action="{{ route('job_preparation.update_module', ['encryptedId' => $encryptedId]) }}"
                                                method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="title">Module Title:</label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="{{ $module->title }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="content">Module Content:</label>
                                                    <textarea name="content" class="form-control" required>{!! $module->content !!}</textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="module_number">Where you want to move? :</label>
                                                    <input type="number" name="module_number" class="form-control"
                                                        min="1" value="{{ $module->module_number }}" required>
                                                </div>
                                                <input type="hidden" name="module_id"
                                                    value="{{ encrypt($module->id) }}">

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('showModule', ['courseName' => urlencode($paid_course->title), 'moduleNumber' => $module->module_number, 'encryptedModuleId' => encrypt($module->id)]) }}"
                                class="btn btn-primary">Go to module</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
