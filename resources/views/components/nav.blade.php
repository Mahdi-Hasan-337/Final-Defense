<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img class="logo" src="{{ asset('images/campusdotcrew.png') }}" alt="">
        <a class="navbar-brand logo-name" href="index.php">Campus 360</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="reverse ms-auto">
                <div class="element2">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item text-center">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item text-center {{ Request::is('courses') ? 'active' : '' }}">
                            <a class="nav-link" aria-current="page" href="{{ route('courses') }}">Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('job_preparation') }}">Job
                                Preparation</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('blog') }}">Blog</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page"
                                        href="{{ route('dashboard.user') }}">Dashboard</a>
                                </li>
                            @endauth
                        @endif
                        <li class="nav-item">
                        <li class="s-li-icon search-icon nav-item dropdown d-menu">
                            <a href="#" style="text-decoration:none;" class="dropdown-toggle"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="s-icon fa-solid fa-magnifying-glass p-1" style="color:white;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" id="search-menu">
                                <li>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit"
                                            style="color:black">Search</button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                        </li>
                    </ul>
                </div>

                <div class="element3" style="align-items: center;">
                    @if (Route::has('login'))
                        @auth
                            @include('components.nav.profile-avatar')
                        @else
                            <a class="login-btn py-1 px-3" data-bs-toggle="modal" href="#exampleModalToggle"
                                role="button">Login</a>
                            @if (Route::has('register'))
                                <a class="reg-btn py-1 px-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                    data-bs-dismiss="modal" style="cursor:pointer">Signup</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- auth --}}
@include('components.auth.signin-modal')
@include('components.auth.signup-modal')
@include('components.auth.signout-modal')
@include('components.auth.forgot-password-modal')
@include('components.auth.password-before-delete-modal')
@include('components.auth.delete-profile-modal')
@include('components.auth.update-profile-modal')

@include('components.nav.profile-modal')
