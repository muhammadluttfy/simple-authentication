@extends('layouts.app')

@section('title')
    Login
@endsection

@section('css-vendors')
    {{-- where to input additional CSS for spesific pages --}}
@endsection

@section('content')
    @if (Auth::check())
        <p>Halo, Selamat Datang {{ Auth::user()->name }}. Lihat detail data diri kamu <a
                href="{{ route('profile.index') }}">disini</a></p>
    @else
        <form action="{{ route('auth.storeLogin') }}" method="POST" id="authenticate-form" class="authenticate-form">
            @csrf

            <h2 class="form-title">Login</h2>
            <div class="form-group">
                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                    value="{{ old('email') }}" />
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="password" id="password" placeholder="Password" />
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in" />
            </div>
        </form>
        <p class="loginhere">
            Don't have an account yet ? <a href="{{ route('auth.register') }}" class="loginhere-link">Register here</a>
        </p>
    @endif
@endsection

@section('js-vendors')
    @include('sweetalert::alert')
@endsection
