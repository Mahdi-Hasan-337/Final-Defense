<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="max-height: 35rem; overflow: hidden;">
    <div class="carousel-inner">
        @foreach ($sliders as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('uploads/' . $item->image) }}" class="d-block w-100" alt="..."
                    style="object-fit: content; max-height: 35rem;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->description }}</p>
                        <div>
                            <a href="#" class="btn btn-slider">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($sliders->count() > 1)
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    @endif
</div>
