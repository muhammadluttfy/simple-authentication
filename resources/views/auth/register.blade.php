@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    @if (Auth::check())
        <p>Halo, Selamat Datang {{ Auth::user()->name }}. Lihat detail data diri kamu <a
                href="{{ route('profile.index') }}">disini</a></p>
    @else
        <form action="{{ route('auth.storeRegister') }}" method="POST" id="authenticate-form" class="authenticate-form">
            @csrf
            <h2 class="form-title">Register</h2>
            <div class="form-group">
                <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"
                    value="{{ old('name') }}" required />
            </div>
            <div class="form-group">
                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                    value="{{ old('email') }}" required />
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password" id="password" placeholder="Password"
                    value="{{ old('password') }}" required />
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password_confirmation" id="password_confirmation"
                    placeholder="Repeat your password" required />
            </div>
            <div class="form-group">
                <button type="submit" class="form-submit" id="submit">Sign up</button>
            </div>
        </form>
        <p class="loginhere">
            Have already an account? <a href="{{ route('auth.login') }}" class="loginhere-link">Login here</a>
        </p>
    @endif
@endsection

@section('js-vendors')
    @include('sweetalert::alert')
@endsection
