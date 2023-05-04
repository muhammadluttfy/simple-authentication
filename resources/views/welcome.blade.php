@extends('layouts.app')

@section('title')
    {{ $user->name }}
@endsection

@section('css-vendors')
    {{-- where to input additional CSS for spesific pages --}}
@endsection

@section('content')
    <div>
        <h2 class="form-title">Your Personal Data</h2>
        <div class="form-group">
            <input type="text" class="form-input" name="name" id="name" disabled value="{{ $user->name }}" />
        </div>
        <div class="form-group">
            <input type="text" class="form-input" name="name" id="name" disabled value="{{ $user->email }}" />
        </div>
        <div class="form-group">
            <form method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button type="submit" class="form-submit">Logout</button>
            </form>
        </div>
    </div>
@endsection

@section('js-vendors')
    @include('sweetalert::alert')
@endsection
