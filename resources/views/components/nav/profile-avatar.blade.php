<ul class="navbar-nav justify-content-center">
    <li class="dropdown d-menu">
        <a class="li-item dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div class="rounded-circle border border-white p-1 d-flex justify-content-center align-items-center"
                style="width: 2.5rem; height: 2.5rem;">
                @if (Auth::user()->featured_image)
                    <img class="rounded-circle image-fluid" style="width: 100%; height: 100%; object-fit: cover;"
                        src="{{ asset('uploads/' . Auth::user()->featured_image) }}" alt="">
                @else
                    <img class="rounded-circle image-fluid" src="{{ asset('images/campusdotcrew.png') }}"
                        style="width: 100%; height: 100%; object-fit: cover;" alt="Default Avatar">
                    {{-- <i class="fas fa-user fa-user text-white" style=" font-size: 1.8rem;"></i> --}}
                @endif
            </div>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" style="width: 15rem; padding: 2rem 2rem 0rem 2rem;"
            aria-labelledby="navbarDropdownMenuLink">

            <li class="text-center">
                @if (Auth::user()->featured_image)
                    <img class=""
                        style="border-radius: 50%; width: 3rem; height: 3rem; object-fit: cover; border: 2px solid black;"
                        src="{{ asset('uploads/' . Auth::user()->featured_image) }}" alt="">
                @else
                    <img class=""
                        style="border-radius: 50%;  width: 3rem; height: 3rem; object-fit: cover; border: 2px solid black;"
                        src="{{ asset('images/campusdotcrew.png') }}" alt="Default Avatar">
                @endif
            </li>

            <li class="text-center" style="font-size:1.2rem; font-weight:bold; text-transform:uppercase; ">
                {{ Auth::user()->name }}
            </li>

            <li class="text-center" style="word-wrap: break-word; font-size: .7rem">
                {{ Auth::user()->email }}
            </li>

            <hr>

            <li>
                <a href="profileModal" data-bs-toggle="modal" data-bs-target="#profileModal"
                    style="text-decoration:none; color:black;">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <i class="col-3 fa-solid fa-user"></i>
                        </div>
                        <div class="p-2 bd-highlight">My Profile</div>
                        <div class="ms-auto p-2 bd-highlight">></div>
                    </div>

                </a>
            </li>

            <li>
                <a href="logoutModal" data-bs-toggle="modal" data-bs-target="#logoutModal"
                    style="text-decoration:none; color:black;">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </div>
                        <div class="p-2 bd-highlight">Logout</div>
                        <div class="ms-auto p-2 bd-highlight">
                            >
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </li>
</ul>
