@extends('layouts.app')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    @include('Components.nav')

    @if (session('success'))
        <div class="alert-container show">
            <div class="alert alert-success auto-hide">
                <h5 class="text-success">
                    {{ session('success') }}
                </h5>
            </div>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert-container show">
            <div class="alert alert-danger auto-hide">
                <h5 class="text-success">
                    {{ $error }}
                </h5>
            </div>
        </div>
    @endif

    @if (session('status') === 'password-updated')
        <div class="alert-container show">
            <div class="alert alert-success auto-hide">
                <h5 class="text-success">
                    Saved
                </h5>
            </div>
        </div>
    @endif

    <div class="container py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-md-8 mb-5">
                <div class="p-4 bg-white shadow rounded">
                    @include('components.profile.update-profile-information-form')
                </div>
            </div>
            <div class="col-md-8 mb-5">
                <div class="p-4 bg-white shadow rounded">
                    @include('components.profile.update-password-form')
                </div>
            </div>
            {{-- <div class="col-md-8 mb-5">
                <div class="p-4 bg-white shadow rounded">
                    @include('profile.delete-user-form')
                </div>
            </div> --}}
        </div>
    </div>
@endsection
