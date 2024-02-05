@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/job.css') }}">
@endsection

@section('scripts')
@endsection

@section('content')
    @include('Components.nav')
    @include('Components.job')
    {{-- @include('Components.footer') --}}
@endsection
