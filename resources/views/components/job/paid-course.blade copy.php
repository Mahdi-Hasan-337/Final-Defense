@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->role === 'admin')
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
                            {{-- <label for="covered_topics">Covered Topics</label> --}}
                            <input type="hidden" name="covered_topics" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Module</button>
                    </form>
                @endif
            @endauth
        @endif

        This is paid course {{ $paid_course->id }}

        <div class="row">
            @foreach ($modules as $module)
                <div class="col-md-4 pt-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="card-title">{{ $module->title }}</h3>
                                {{-- <i class="fa-solid fa-trash"></i> --}}
                                <form
                                    action="{{ route('delete_module', ['moduleId' => $module->id, 'encryptedId' => encrypt($paid_course->id)]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
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
