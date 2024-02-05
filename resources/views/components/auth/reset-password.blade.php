@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav/reset_password.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/reset_password.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center justify-content-center vh-100">
                <form class="col-12 col-lg-5 col-md-6" method="POST" action="{{ route('password.store') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert-container show">
                            <div class="alert alert-danger auto-hide">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- @if ($errors->has('status'))
                        <div class="alert-container show">
                            <div class="alert alert-danger auto-hide">
                                <h5 class="text-danger">{{ session('status') }}</h5>
                            </div>
                        </div>
                    @endif --}}

                    <h2>Reset Password</h2>
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="input-box">
                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                            value="{{ $request->email }}" required autofocus autocomplete="username" readonly>
                        <i class="fa-solid fa-envelope email"></i>
                    </div>

                    <div class="input-box">
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password">
                        <i class="fa-solid fa-lock password"></i>
                        <i id="eye-icon-1" class="toggle-password eye-icon fa-solid fa-eye-slash pwd_hide"
                            onclick="togglePasswordVisibility('password', 'eye-icon-1')"></i>
                        {{-- @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>

                    <div class="input-box">
                        <input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password">
                        <i class="fa-solid fa-lock password"></i>
                        <i id="eye-icon-2" class="toggle-password fa-solid fa-eye-slash pwd_hide"
                            onclick="togglePasswordVisibility('password_confirmation', 'eye-icon-2')"></i>
                        {{-- @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>

                    <div class="form-group">
                        <button type="submit" name="uppass_btn" class="btn btn-primary text-center col-12 mt-4">Update
                            Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
