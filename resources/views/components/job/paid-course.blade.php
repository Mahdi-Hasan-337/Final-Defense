@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
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
                                    <label for="module_number">Your Desired Module Number:</label>
                                    <input type="number" name="module_number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="covered_topics" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Module</button>
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
                                <button type="submit" class="btn btn-{{ $module->is_locked == 1 ? 'danger' : 'primary' }}">
                                    {{ $module->is_locked == 1 ? 'Disable' : 'Enable' }}
                                </button>
                            </form>
                            <p class="card-text">{{ $module->content }}</p>
                            <a href="{{ url('/job_preparation/' . urlencode($paid_course->title) . '/' . $module->module_number . '/' . encrypt($module->id)) }}"
                                class="btn btn-primary">Go to module</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
