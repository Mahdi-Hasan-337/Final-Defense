{{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

<!-- Login Modal Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal"
                        aria-label="Close">&times</button>
                    <h2>Login</h2>
                    <div class="input-box">
                        <input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                            :value="old('email')" placeholder="Enter Email" required autofocus autocomplete="username">
                        <i class="fa-solid fa-envelope email"></i>
                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" class="block mt-1 w-full pr-10 form-control"
                            type="password" name="password" required autocomplete="current-password"
                            placeholder="Enter Password" required>
                        <i class="fa-solid fa-lock password"></i>
                        <i id="togglePassword" class="toggle-password fa-solid fa-eye-slash pwd_hide"
                            onclick="togglePasswordVisibility('password')"
                            style="color:#707070; font-size: 0.9rem;"></i>
                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                    </div>

                    <!-- Remember Me -->
                    <div class="option-field">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="forgot_pass underline text-sm italic text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                data-bs-target="#forgotpassModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>
                    <button class="button" name="login_btn">Login</button>
                    <div class="login-signup">
                        Don't have an account?
                        <a class="signup-txt" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                            data-bs-dismiss="modal" style="cursor:pointer">Signup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const passwordToggleIcon = document.querySelector(`[onclick="togglePasswordVisibility('${inputId}')"]`);
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggleIcon.classList.remove('fa-eye-slash');
            passwordToggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            passwordToggleIcon.classList.remove('fa-eye');
            passwordToggleIcon.classList.add('fa-eye-slash');
        }
    }
</script>
