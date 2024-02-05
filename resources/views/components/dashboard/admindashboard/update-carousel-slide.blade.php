@auth
    @if (auth()->user()->role === 'admin')
        <div class="modal fade" id="update-carousel-slide-{{ $sliders->id }}" aria-hidden="true"
            aria-labelledby="update-carousel-slide-{{ $sliders->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header"
                        style="margin: 0; padding-top: 0; padding-bottom: 0; padding-right:2rem; box-sizing:border-box">
                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                        <h2>Update</h2>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('edit-slider', ['id' => $sliders->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="input-box">
                                <input type="text" id="heading" placeholder="Enter heading"
                                    class="block mt-1 w-full form-control" name="heading" value="{{ $sliders->heading }}">
                            </div>

                            <div class="input-box">
                                <textarea id="description" class="summernote block mt-1 w-full form-control" name="description">
                                        {{ $sliders->description }}
                                    </textarea>
                            </div>

                            <div class="input-box">
                                <input type="text" id="link" placeholder="Enter link"
                                    class="block mt-1 w-full form-control" name="link" value="{{ $sliders->link }}">
                            </div>

                            <div class="input-box">
                                <input type="text" id="link_name" placeholder="Enter link_name"
                                    class="block mt-1 w-full form-control" name="link_name"
                                    value="{{ $sliders->link_name }}">
                            </div>

                            <div class="mb-4">
                                <img src="{{ asset('uploads/' . $sliders->image) }}" alt=""
                                    style="width: 30rem; height: 30rem">
                                <input type="file" class="block mt-1 w-full form-control" id="image" name="image"
                                    class="form-control">
                            </div>

                            <div class="input-box">
                                <input type="checkbox" id="status" name="status"
                                    {{ $sliders->status == '1' ? 'checked' : '' }}>
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
