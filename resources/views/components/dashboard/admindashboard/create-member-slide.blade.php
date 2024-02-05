@auth
    @if (auth()->user()->role === 'admin')
        <div class="modal fade" id="create-member-slide" aria-hidden="true" aria-labelledby="#create-member-slide"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/add-member-carousel-slide') }}" enctype="multipart/form-data">
                            @csrf
                            <button type="button" class="modal-close-btn" data-bs-dismiss="modal"
                                aria-label="Close">&times</button>
                            <h2>Register member</h2>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="name" placeholder="Enter name"
                                    class="block mt-1 w-full form-control" name="name" autofocus autocomplete="name">
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                <textarea id="designation" placeholder="Enter designation" class="summernote block mt-1 w-full form-control"
                                    name="designation"></textarea>
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="fb" placeholder="Enter fb"
                                    class="block mt-1 w-full form-control" name="fb" autofocus autocomplete="fb">
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="email" placeholder="Enter email"
                                    class="block mt-1 w-full form-control" name="email" autofocus autocomplete="email">
                            </div>

                            {{--  --}}
                            <div class="input-box">
                                <input type="text" id="github" placeholder="Enter github"
                                    class="block mt-1 w-full form-control" name="github" autofocus autocomplete="github">
                            </div>


                            {{--  --}}
                            <div class="input-box">
                                <label for="status">Select Status:</label>
                                <select id="status" name="status" class="block mt-1 w-full form-control" required>
                                    <option value="member">Member</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="partner">Partner</option>
                                </select>
                            </div>
                            <div class="my-4">
                                <pre>    </pre>
                            </div>

                            {{--  --}}
                            <div class="my-4">
                                <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                                    required>
                            </div>

                            {{--  --}}
                            <div class="">
                                <input type="checkbox" id="visibility" name="visibility">
                                <label for="visibility">Visible</label>
                            </div>

                            <button class="button" name="register_btn">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endauth
