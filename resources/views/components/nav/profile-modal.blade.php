<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>

                @auth
                    <div class='text-center mt-5'>
                        @if (Auth::user()->featured_image)
                            <img class=""
                                style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                                src="{{ asset('uploads/' . Auth::user()->featured_image) }}" alt="">
                        @else
                            <!-- Default image if featured_image is not set -->
                            <img class=""
                                style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                                src="{{ asset('images/campusdotcrew.png') }}" alt="Default Avatar">
                        @endif

                        <h4 class='mt-3' style='text-transform:uppercase'>{{ Auth::user()->name }}</h4>

                        <h5>{{ Auth::user()->email }}</h5>

                        {{-- Other profile information --}}
                        <div class='d-flex' style='align-items:center; justify-content:center'>
                            {{-- Social media links --}}
                        </div>

                        <button type="button" class="col-12 btn btn-primary mt-3 p-2 updatebtn" data-bs-toggle="modal"
                            data-bs-target="#updateprofilemodal" data-bs-dismiss='modal'
                            data-user-id="{{ Auth::user()->id }}" style="margin-right: 1rem;">
                            <i class="fa-solid fa-pen-to-square"></i> UPDATE PROFILE
                        </button>

                        {{-- <button type="button" class="col-12 btn btn-danger mt-3 p-2 deletebtn" data-bs-toggle="modal"
                            data-bs-target="#deletemodal" data-bs-dismiss='modal' data-user-id="{{ Auth::user()->id }}"
                            style="margin-right: 1rem;">
                            <i class='fa-solid fa-trash'></i> DELETE YOUR ACCOUNT
                        </button> --}}
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
