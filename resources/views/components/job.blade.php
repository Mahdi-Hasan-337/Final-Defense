@section('content')
    <section id="job-preparetion" class="container mt-4">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center pt-5">
                    <h2>JOB PREPARATION SERIES</h2>
                </div>
            </div>
            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->role === 'admin')
                        <form action="{{ route('job_preparation.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control-file" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @endif
                @endauth
            @endif

            <div class="row">
                @foreach ($paid_courses as $paid_course)
                    <div class="col-md-4 pt-5">
                        <div class="card mb-4">
                            <img src="{{ asset('uploads/' . $paid_course->image) }}" class="card-img-top custom-image"
                                alt="{{ $paid_course->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $paid_course->title }}</h5>
                                <p class="card-text">{{ $paid_course->description }}</p>
                                <a href="{{ url('/job_preparation/' . encrypt($paid_course->id)) }}"
                                    class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
