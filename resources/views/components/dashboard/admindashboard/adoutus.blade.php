<a class="btn btn-primary col-12 mb-2 py-1 px-3" data-bs-target="#create-member-slide" data-bs-toggle="modal"
    data-bs-dismiss="modal" style="cursor:pointer">Register Member</a>

{{--  --}}
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th class="align-middle">ID</th>
            <th class="align-middle">Designation</th>
            <th class="align-middle">Facebook</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">Github</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Image</th>
            <th class="align-middle">Visibility</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($activemembers as $members)
            <tr>
                <td class="align-middle">{{ $members->id }}</td>
                <td class="align-middle">{{ $members->designation }}</td>
                <td class="align-middle">{{ $members->fb }}</td>
                <td class="align-middle">{{ $members->email }}</td>
                <td class="align-middle">{{ $members->github }}</td>
                <td class="align-middle">{{ $members->status }}</td>
                <td class="align-middle">
                    <img src="{{ asset('uploads/' . $members->image) }}" style="width: 100px; height:100px; "
                        alt="...">
                </td>
                <td class="align-middle">
                    <form style="margin:0; padding:0; decoration:none; background:none"
                        action="{{ route('update.visibility', ['encryptedUserId' => encrypt($members->id)]) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-{{ $members->visibility == 1 ? 'danger' : 'primary' }}">
                            {{ $members->visibility == 1 ? 'Invisible' : 'Visible' }}
                        </button>
                    </form>
                </td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                        data-bs-target="#update-member-slide-{{ $members->id }}"
                        data-member-id="{{ $members->id }}">
                        Update
                    </button>
                    @include('components.dashboard.admindashboard.update-member-slide')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{--  --}}
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th class="align-middle">ID</th>
            <th class="align-middle">Designation</th>
            <th class="align-middle">Facebook</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">Github</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Image</th>
            <th class="align-middle">Visibility</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($inactivemembers as $members)
            <tr>
                <td class="align-middle">{{ $members->id }}</td>
                <td class="align-middle">{{ $members->designation }}</td>
                <td class="align-middle">{{ $members->fb }}</td>
                <td class="align-middle">{{ $members->email }}</td>
                <td class="align-middle">{{ $members->github }}</td>
                <td class="align-middle">{{ $members->status }}</td>
                <td class="align-middle">
                    <img src="{{ asset('uploads/' . $members->image) }}" style="width: 100px; height:100px; "
                        alt="...">
                </td>
                <td class="align-middle">
                    <form style="margin:0; padding:0; decoration:none; background:none"
                        action="{{ route('update.visibility', ['encryptedUserId' => encrypt($members->id)]) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-{{ $members->visibility == 1 ? 'danger' : 'primary' }}">
                            {{ $members->visibility == 1 ? 'Invisible' : 'Visible' }}
                        </button>
                    </form>
                </td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal"
                        data-bs-target="#update-member-slide-{{ $members->id }}"
                        data-member-id="{{ $members->id }}">
                        Update
                    </button>
                    @include('components.dashboard.admindashboard.update-member-slide')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
