@auth
    @if (auth()->user()->role === 'admin')
        <div class="modal fade" id="update-member-slide-{{ $members->id }}" aria-hidden="true"
            aria-labelledby="update-member-slide-{{ $members->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('edit-member-page', ['id' => $members->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="input-box">
                                <input type="text" id="name" placeholder="Enter name"
                                    class="block mt-1 w-full form-control" name="name" value="{{ $members->name }}">
                            </div>

                            <div class="input-box">
                                <textarea id="designation" placeholder="Enter designation" class="summernote block mt-1 w-full form-control"
                                    name="designation">
                                    {{ $members->designation }}</textarea>
                            </div>

                            <div class="input-box">
                                <input type="text" id="fb" placeholder="Enter fb"
                                    class="block mt-1 w-full form-control" name="fb" value="{{ $members->fb }}">
                            </div>

                            <div class="input-box">
                                <input type="text" id="email" placeholder="Enter email"
                                    class="block mt-1 w-full form-control" name="email" value="{{ $members->email }}">
                            </div>

                            <div class="input-box">
                                <input type="text" id="github" placeholder="Enter github"
                                    class="block mt-1 w-full form-control" name="github" value="{{ $members->github }}">
                            </div>


                            <div class="input-box">
                                <label for="status">Select Status:</label>
                                <select id="status" name="status" class="block mt-1 w-full form-control" required>
                                    <option value="member" {{ $members->status == 'member' ? 'selected' : '' }}>Member
                                    </option>
                                    <option value="supervisor" {{ $members->status == 'supervisor' ? 'selected' : '' }}>
                                        Supervisor</option>
                                    <option value="partner" {{ $members->status == 'partner' ? 'selected' : '' }}>Partner
                                    </option>
                                </select>
                            </div>
                            <div class="my-4">
                                <pre>    </pre>
                            </div>

                            <div class="my-4">
                                <img src="{{ asset('uploads/' . $members->image) }}" alt=""
                                    style="width: 30rem; height: 30rem">
                                <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                                    class="form-control">
                            </div>

                            <div class="">
                                <input type="checkbox" id="visibility" name="visibility"
                                    {{ $members->visibility == '1' ? 'checked' : '' }}>
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
