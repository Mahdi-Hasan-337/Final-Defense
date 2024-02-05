@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/course/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/course/style.css') }}">
@endsection

@section('scripts')
@endsection

@section('content')
    @include('Components.nav')
    @include('Components.course')
    @include('Components.footer')
@endsection
