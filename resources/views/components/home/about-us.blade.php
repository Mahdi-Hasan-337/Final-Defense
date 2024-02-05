<section class="student-section">
    <div id="stdCarousel" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($members as $key => $member)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} c-item">
                    <h1 class="mb-5 mt-3 text-secondary">
                        @if ($member->status == 'member')
                            Our Team
                        @elseif ($member->status == 'supervisor')
                            Our Supervisor
                        @elseif ($member->status == 'partner')
                            Our Partner
                        @endif
                    </h1>
                    <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('uploads/' . $member->image) }}"
                        alt="avatar" style="width: 9.5rem; height:9.5rem;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h4 class="mb-1">{{ $member->name }}</h4>

                            {{-- Conditionally show social media links only for members --}}
                            @if ($member->status == 'member')
                                <div class="d-flex justify-content-center">
                                    <a href="{{ $member->fb }}" target='_blank' style="text-decoration: none;">
                                        <i class='d-flex align-items-center justify-content-center social-icon fab fa-facebook-f m-3'
                                            title='Facebook'></i></a>
                                    <a href='{{ $member->email }}' target='_blank' style="text-decoration: none;">
                                        <i class='d-flex align-items-center justify-content-center social-icon fas fa fa-envelope m-3'
                                            title='email'></i>
                                    </a>
                                    <a href='{{ $member->github }}' target='_blank' style="text-decoration: none;">
                                        <i class='d-flex align-items-center justify-content-center social-icon fa-brands fa-github m-3'
                                            title='Github'></i>
                                    </a>
                                </div>
                            @endif

                            @if ($member->status == 'supervisor')
                                <p>{!! nl2br(e($member->designation)) !!}</p>
                            @endif

                            @if ($member->status == 'partner')
                                <p>{!! nl2br(e($member->designation)) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if ($members->count() > 1)
            <a class="carousel-control-prev" href="#stdCarousel" role="button" data-bs-slide="prev"
                style="color:black">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#stdCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        @endif
    </div>
</section>
