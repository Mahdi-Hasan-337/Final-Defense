<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-V6a/4v5MlqPpBZ3oZzFwMVi4r6QCggqnhCFnZz5U9NcBQ3dS+6hbtiB1e9PbM1uIzizYZxvVh9tknf1nksGcAFw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Register Modal -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal"
                        aria-label="Close">&times</button>
                    <h2>Register</h2>
                    <div class="input-box">
                        <input type="text" id="name" placeholder="Enter username"
                            class="block mt-1 w-full form-control" name="name" required autofocus
                            autocomplete="name">
                        <i class="fa-solid fa-user email"></i>
                    </div>

                    <div class="input-box">
                        <input type="email" id="email" placeholder="Enter email"
                            class="block mt-1 w-full form-control" name="email" required autocomplete="username">
                        <i class="fa-solid fa-envelope email"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Enter Password" id="password_real"
                            class="block mt-1 w-full pr-10 form-control" name="password" required
                            autocomplete="new-password">
                        <i class="fa-solid fa-lock password"></i>
                        <i class="toggle-password fa-solid fa-eye-slash pwd_hide"
                            onclick="togglePasswordVisibility('password_real')"
                            style="color:#707070; font-size: 0.9rem;"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Re-type Password" id="password_confirmation"
                            class="block mt-1 w-full pr-10 form-control" name="password_confirmation" required
                            autocomplete="new-password">
                        <i class="fa-solid fa-lock password"></i>
                        <i class="toggle-password fa-solid fa-eye-slash pwd_hide"
                            onclick="togglePasswordVisibility('password_confirmation')"
                            style="color:#707070; font-size: 0.9rem;"></i>
                    </div>

                    <div class="mb-4">
                        <input type="file" id="featuredImage" name="featured_image" class="form-control" hidden>
                    </div>

                    <div class="mb-4">
                        <input type="file" id="phone_number" name="phone_number" class="form-control" hidden>
                    </div>

                    <div class="mb-4">
                        <input type="file" id="facebook" name="facebook" class="form-control" hidden>
                    </div>

                    <div class="mb-4">
                        <input type="file" id="github" name="github" class="form-control" hidden>
                    </div>

                    <div class="mb-4">
                        <input type="file" id="telegram" name="telegram" class="form-control" hidden>
                    </div>

                    <button class="button" name="register_btn">Register</button>

                    <div class="login-signup">
                        Already have an account?
                        <a class="signup-txt" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal" style="cursor:pointer;">Signin</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
