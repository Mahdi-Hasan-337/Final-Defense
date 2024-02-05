<section class="space-y-6 px-5">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Delete Account') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>

    <button type="button" class="col-12 btn btn-danger mt-3 p-2 deletebtn" data-bs-toggle="modal"
        data-bs-target="#deletemodal" data-bs-dismiss='modal' data-user-id="{{ Auth::user()->id }}"
        style="margin-right: 1rem;">
        <i class='fa-solid fa-trash'></i> DELETE YOUR ACCOUNT
    </button>

    @include('components.nav.deleteprofilemodal')
</section>
