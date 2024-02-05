@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashaboard.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
@endsection

@section('content')
    <h5>User Dashbaord</h5>
    @auth
        @if (Auth::user()->role == 'admin')
            <div>
                <a class="" aria-current="page" href="{{ route('dashboard.admin') }}">Go to Admin Dashboard</a>
            </div>
        @endif
    @endauth
    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
    <div class="font-medium text-sm text-gray-500"><a href="{{ route('profile.edit') }}">'Profile<a></div>
    <div class="font-medium text-sm text-gray-500">
        <img src="{{ asset('uploads/' . Auth::user()->featured_image) }}" alt="Profile Picture">
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
