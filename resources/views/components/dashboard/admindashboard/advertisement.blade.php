<a class="btn btn-primary col-12 mb-2 py-1 px-3" data-bs-target="#create-carousel-slide" data-bs-toggle="modal"
    data-bs-dismiss="modal" style="cursor:pointer">Button</a>
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th class="align-middle">ID</th>
            <th class="align-middle">Heading</th>
            <th class="align-middle">Description</th>
            <th class="align-middle">Image</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($showsliders as $item)
            <tr>
                <td class="align-middle">{{ $item->id }}</td>
                <td class="align-middle">{{ $item->heading }}</td>
                <td class="align-middle">{{ $item->description }}</td>
                <td class="align-middle">
                    <img src="{{ asset('uploads/' . $item->image) }}" style="width: 100px; height:100px; "
                        alt="...">
                </td>
                <td class="align-middle">
                    <form style="margin:0; padding:0; decoration:none; background:none" method="post"
                        action="{{ route('update.adSlide.status', ['encryptedUserId' => encrypt($item->id)]) }}">
                        @csrf
                        <button type="submit" style=""
                            class="btn btn-{{ $item->status == 1 ? 'danger' : 'primary' }}">
                            {{ $item->status == 1 ? 'Invisible' : 'Visible' }}
                        </button>
                    </form>
                </td>
                <td class="align-middle">
                    {{-- <a type="submit" href="{{ url('edit-page/' . $item->id) }}">Update</a> --}}
                    <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                        data-bs-target="#update-carousel-slide-{{ $item->id }}"
                        data-member-id="{{ $item->id }}">
                        Update
                    </button>
                    {{-- @include('components.dashboard.admindashboard.update-carousel-slide') --}}
                    @auth
                        @if (auth()->user()->role === 'admin')
                            <div class="modal fade" id="update-carousel-slide-{{ $item->id }}" aria-hidden="true"
                                aria-labelledby="update-carousel-slide-{{ $item->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="{{ route('edit-slider-page', ['id' => $item->id]) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <button type="button" class="modal-close-btn" data-bs-dismiss="modal"
                                                    aria-label="Close">&times</button>
                                                <h2>Register</h2>

                                                <div class="input-box">
                                                    <input type="text" id="heading" placeholder="Enter heading"
                                                        class="block mt-1 w-full form-control" name="heading"
                                                        value="{{ $item->heading }}">
                                                </div>

                                                <div class="input-box">
                                                    <textarea id="description" class="summernote block mt-1 w-full form-control" name="description">
                                        {{ $item->description }}
                                    </textarea>
                                                </div>

                                                <div class="input-box">
                                                    <input type="text" id="link" placeholder="Enter link"
                                                        class="block mt-1 w-full form-control" name="link"
                                                        value="{{ $item->link }}">
                                                </div>

                                                <div class="input-box">
                                                    <input type="text" id="link_name" placeholder="Enter link_name"
                                                        class="block mt-1 w-full form-control" name="link_name"
                                                        value="{{ $item->link_name }}">
                                                </div>

                                                <div class="mb-4">
                                                    <img src="{{ asset('uploads/' . $item->image) }}" alt=""
                                                        style="width: 30rem; height: 30rem">
                                                    <input type="file" class="block mt-1 w-full form-control"
                                                        id="image" name="image" class="form-control">
                                                </div>

                                                <div class="input-box">
                                                    <input type="checkbox" id="status" name="status"
                                                        {{ $item->status == '1' ? 'checked' : '' }}>
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
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
