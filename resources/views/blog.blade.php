@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Blog/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Blog/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Blog/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Blog/blog.css') }}" />
@endsection

@section('scripts')
    <script src="{{ asset('js/blog/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/blog/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/blog/slick.min.js') }}"></script>
    <script src="{{ asset('js/blog/splide.min.js') }}"></script>
    <script src="{{ asset('js/blog/main.js') }}"></script>
@endsection

@section('content')
    @include('Components.nav')
    @include('Components.blog')
    @include('Components.footer')
@endsection
