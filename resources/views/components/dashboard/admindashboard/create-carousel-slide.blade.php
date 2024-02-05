@auth
    @if (auth()->user()->role === 'admin')
        <div class="modal fade" id="create-carousel-slide" aria-hidden="true" aria-labelledby="#create-carousel-slide"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" action="{{ route('addslide') }}" enctype="multipart/form-data">
                            @csrf
                            <button type="button" class="modal-close-btn" data-bs-dismiss="modal"
                                aria-label="Close">&times</button>
                            <h2>Register</h2>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="heading" placeholder="Enter heading"
                                    class="block mt-1 w-full form-control" name="heading" autofocus autocomplete="heading">
                                {{-- <i class="fa-solid fa-user email"></i> --}}
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                {{-- <input type="text" id="description" placeholder="Enter description"
                                    class="block mt-1 w-full form-control" name="description" autofocus
                                    autocomplete="description"> --}}
                                <textarea id="description" placeholder="Enter description" class="summernote block mt-1 w-full form-control" autofocus
                                    autocomplete="description"></textarea>
                                {{-- <i class="fa-solid fa-user email"></i> --}}
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="link" placeholder="Enter link"
                                    class="block mt-1 w-full form-control" name="link" autofocus autocomplete="link">
                                {{-- <i class="fa-solid fa-user email"></i> --}}
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="link_name" placeholder="Enter link_name"
                                    class="block mt-1 w-full form-control" name="link_name" autofocus
                                    autocomplete="link_name">
                                {{-- <i class="fa-solid fa-user email"></i> --}}
                            </div>

                            {{--  --}}
                            <div class="mb-4">
                                <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                                    required class="form-control">
                            </div>

                            {{--  --}}
                            <div class="">
                                <input type="checkbox" id="status" name="status">
                                <label for="status">Visible</label>
                            </div>

                            <button class="button" name="register_btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endauth
