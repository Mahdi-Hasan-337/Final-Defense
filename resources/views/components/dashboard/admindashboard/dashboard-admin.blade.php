<div class="d-flex" id="wrapper">
    <div class="bg-white d-flex flex-column"id="sidebar-wrapper">
        <a class="mt-3 d-flex align-items-center text-decoration-none" href="{{ route('home') }}">
            <img src="{{ asset('images/campusdotcrew.png') }}" alt="#" class="ms-3 mr-2"
                style="width: 2.5rem; height: 2.5rem; border-radius: 30%;">
            <span class="fs-5 ms-2 logo-name">Campus 360</span>
        </a>
        <hr class="mx-2">
        <div class="contents"
            style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href=" {{ Route('dashboard.user') }} " class="list-group-item list-group-item-action">
                    <i class="fas fa-tachometer-alt me-2"></i>User Dashboard
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-chart-line me-2"></i>Analytics
                </a>

                <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                    data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false"
                    aria-controls="NotificationMenu">
                    <i class="fa-solid fa-bell me-2"></i>Blog Part
                </a>
                <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                    <a href="{{ url('add_blog') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-comment-alt me-2"></i>Add Blog
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-comment-alt me-2"></i>Show Blog
                    </a>
                </div>

                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-comments me-2"></i>Feedback
                </a>

                <hr class="mx-2">

                <a href="{{ route('profile.edit') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-thin fa-user me-2"></i>My Profile
                </a>

                <a href="logoutModal" class="list-group-item list-group-item-ac" data-bs-toggle="modal"
                    data-bs-target="#logoutModal" style="text-decoration:none; color:black;">
                    <i class="fas fa-light fa-right-from-bracket"></i>
                    Logout
                </a>

                @include('components.auth.signout-modal')
            </div>
        </div>
    </div>

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light px-4 py-2">
            <div class="d-flex align-items-center">
                <i class="fas fa-thin fa-bars fs-5 me-3" id="menu-toggle"></i>
                <h4>Dashboard</h4>
            </div>
            <div class="d-flex align-items-center ms-auto">
                <i id="btn" class="fas fal fa-expand mx-2" style="font-size: 1.2rem;" data-toggle="tooltip"
                    data-placement="bottom" title="Expand"></i>
                <div class="rounded-circle border border-dark p-1 d-flex justify-content-center align-items-center"
                    style="width: 2.5rem; height: 2.5rem; border:black; background: black">
                    @include('components.nav.profile-avatar')
                </div>
                @include('components.nav.profile-modal')
                @include('components.auth.update-profile-modal')
            </div>
        </nav>

        <div class="container-fluid px-4">
            <div class="row g-3 my-2">

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">25%</h3>
                            <p class="fs-5">Visitors</p>
                        </div>
                        <i class="fa-solid fa-users-line fs-1 border p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">400</h3>
                            <p class="fs-5">New Uploads</p>
                        </div>
                        <i class="fa-solid fa-upload fs-1 border p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">150</h3>
                            <p class="fs-5">Downlaods</p>
                        </div>
                        <i class="fa-solid fa-download fs-1 p-3"></i>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <h3 class="fs-4 mb-3">Advertise</h3>
                <div class="col">

                    @include('components.dashboard.admindashboard.advertisement')
                    @include('components.dashboard.admindashboard.adoutus')
                    @include('components.dashboard.admindashboard.user')
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.dashboard.admindashboard.create-carousel-slide')
@include('components.dashboard.admindashboard.create-member-slide')
