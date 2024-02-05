@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('scripts')
@endsection

@section('content')
    @include('Components.nav')
    @include('components.home.error')
    @include('components.home.dynamic-advertisement')
    @include('components.home.body')
    @include('components.home.about-us')
    @include('Components.footer')
@endsection
