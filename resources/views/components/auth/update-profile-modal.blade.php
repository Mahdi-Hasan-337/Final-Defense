<!-- Update Profile Modal -->
<div class="modal fade" id="updateprofilemodal" aria-hidden="true" aria-labelledby="updateprofilemodalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            @auth
                <form action="{{ route('profile.updates', encrypt(Auth::user()->id)) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4" style="display:flex;justify-content:space-between">
                        <a class="signup-txt" data-bs-target="#profileModal" data-bs-toggle="modal" data-bs-dismiss="modal"
                            style="cursor:pointer; text-decoration:none;color:black;"><span
                                style="font-size:1.5rem;">&lt;</span></a>
                        <button type="button" class="modal-close-btn float-end" data-bs-dismiss="modal"
                            aria-label="Close">&times</button>
                    </div>

                    <h2 class="modal-title text-center mb-2" id="updatemodalLabel">Update Profile</h2>

                    <div class="modal-body">
                        <input type="hidden" name="update_id" value="{{ encrypt(Auth::user()->id) }}">
                        <div class="mb-3 d-flex justify-content-center">
                            @if (Auth::user()->featured_image)
                                <img class="d-flex justify-content-center"
                                    style="width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                                    src="{{ asset('uploads/' . Auth::user()->featured_image) }}" alt="">
                            @else
                                <!-- Default image if featured_image is not set -->
                                <img class="text-center"
                                    style="width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                                    src="{{ asset('images/campusdotcrew.png') }}" alt="Default Avatar">
                            @endif
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <input type="file" id="featuredImage" name="featured_image" class="form-control">
                        </div>

                        <div class="full d-flex justify-content-between">
                            <div class="full1 col-6" style="padding-right:0.5rem;">

                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Name</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Email</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Enter Email" value="{{ Auth::user()->email }} " readonly>
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Phone</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control"
                                            placeholder="Enter Phone" value="{{ Auth::user()->mobile }}">
                                    </div>
                                </div>
                            </div>

                            <div class="full2 col-6" style="padding-left:0.5rem;">
                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Facebook</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="facebook" id="facebook" class="form-control"
                                            placeholder="Enter Facebook Account Link" value="{{ Auth::user()->facebook }}">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Telegram</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="telegram" id="email" class="form-control"
                                            placeholder="Enter Telegram Account Link" value="{{ Auth::user()->telegram }}">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Github</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="github" id="phone" class="form-control"
                                            placeholder="Enter Github Account Link" value="{{ Auth::user()->github }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="updatedata" class="col-12 btn btn-primary mb-3 p-2"><i
                                class='fa-solid fa-pen-to-square'></i> UPDATE</button>
                    </div>
                </form>
            @endauth
        </div>
    </div>
</div>
