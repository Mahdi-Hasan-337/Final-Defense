<section>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <h2 class="text-lg font-medium text-gray-900 mb-5">
            Update Password
        </h2>

        <div class="input-box">
            <input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full"
                placeholder="Current Password" required autocomplete="current-password" style="font-style:poppins;">
            <i class="fa-solid fa-lock password"></i>
            <i id="eye-icon-1" class="toggle-password fa-solid fa-eye pwd_hide" style="font-size: 1rem; color:gray"
                onclick="togglePasswordVisibility('update_password_current_password', 'eye-icon-1')"></i>
        </div>

        <div class="input-box">
            <input id="update_password_password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Enter New Password" required autocomplete="new-password" style=" font-style:poppins; ">
            <i class="fa-solid fa-lock password"></i>
            <i id="eye-icon-2" class="toggle-password fa-solid fa-eye pwd_hide" style="font-size: 1rem; color:gray"
                onclick="togglePasswordVisibility('update_password_password', 'eye-icon-2')"></i>
        </div>

        <div class="input-box">
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" required autocomplete="new-password" placeholder="Retype Password">
            <i class="fa-solid fa-lock password"></i>
            <i id="eye-icon-3" class="toggle-password fa-solid fa-eye pwd_hide" style="font-size: 1rem; color:gray"
                onclick="togglePasswordVisibility('update_password_password_confirmation', 'eye-icon-3')"></i>
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary col-12 mt-5 rounded">SAVE</button>
        </div>
    </form>
</section>

@section('styles')
    <style>
        #eye-icon-1,
        #eye-icon-2 {
            font-size: 0.9rem;
            color: #707070;
        }

        .auto-hide {
            animation: hideAlert 20s forwards
        }

        @keyframes hideAlert {
            to {
                opacity: 0;
                display: none
            }
        }

        .alert-container {
            position: relative;
            display: none
        }

        .alert-container.show {
            display: block;
            margin-bottom: 1.25rem
        }
    </style>
@endsection

@section('scripts')
<script>
    function togglePasswordVisibility(inputId, eyeIconId) {
        var passwordInput = document.getElementById(inputId);
        var eyeIcon = document.getElementById(eyeIconId);

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        }
    }
</script>
@endsection
