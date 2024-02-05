<div class="modal fade" id="forgotpassModalToggle" aria-hidden="true" aria-labelledby="forgotpassModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="text-center">
                        <img src="{{ asset('images/campusdotcrew.png') }}" class="mx-auto logo" alt="Logo">
                    </div>
                    <h2>Reset Password</h2>
                    <div class="input-box">
                        <input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                            :value="old('email')" placeholder="Enter Email" required autofocus>
                        <i class="fa-solid fa-envelope email"></i>
                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                    </div>
                    <button class="button" name="login_btn">Reset</button>
                    <button class="button" style="background-color:#f7f7f7" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
