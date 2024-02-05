@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashaboard.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
@endsection

@section('content')
<div class="d-flex" id="wrapper">
    <div class="bg-white d-flex flex-column" id="sidebar-wrapper">
        <div class="contents"
            style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action"
                    style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href="#" class="list-group-item list-group-item-action"
                    style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fas fa-chart-line me-2"></i>Analytics
                </a>

                <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                    data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false"
                    aria-controls="NotificationMenu"
                    style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fa-solid fa-bell me-2"></i>Blog Part
                </a>
                <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                    <a href="#" class="list-group-item list-group-item-action"
                        style="text-transform:uppercase;font-size:1rem; font-family:'Poppins',sans-serif;">
                        <i class="fas fa-comment-alt me-2"></i>Add Blog
                    </a>
                    <a href="{{url('show_blog')}}" class="list-group-item list-group-item-action"
                        style="text-transform:uppercase;font-size:1rem; font-family:'Poppins',sans-serif;">
                        <i class="fas fa-comment-alt me-2"></i>Show Blog
                    </a>
                </div>

                <a href="#" class="list-group-item list-group-item-action"
                    style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fas fa-comments me-2"></i>Feedback
                </a>
            </div>
        </div>
    </div>

    <section class="blogUpload">
        <div class="container-fluid">

            @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="row mb-5">
                <div class="col">
                    <div class="text-center fw-3 ">
                        <h3>Write Your Blog Content</h3>
                    </div>
                </div>
            </div>
            <div class="w-4/5 m-auto pt-20">
                <form action="3" method="POST" enctype="multipart/form-data">
                    @csrf



                    <input type="text" name="title" placeholder="Title..."
                        class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

                    <textarea name="description" placeholder="Description..."
                        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

                    <div class="bg-grey-lighter pt-15">
                        <label
                            class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <span class="mt-2 text-base leading-normal">
                                Select a file
                            </span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>

                    <button type="submit"
                        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Submit Post
                    </button>
                </form>
            </div>
        </div>

    </section>

</div>
@endsection
