@extends('layouts.app')

@section('title')
   careerfair|Login
@endsection
@section('content')
<div class="authmain">
 

    <form method="POST" action="{{ route('login')}}" class="logform">
        @csrf
        <h1>{{ __('Login') }}</h1>
        <label for="email" class="emaillabel">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email" autofocus>

        @error('email')
        <span class="alert" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
 
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class=" @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password" placeholder="Enter password">
        <p></p>
        @error('password')
        <span class="alert" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <button type="submit" class="btn-primary">
            {{ __('Login') }}
        </button>
    </form>
</div>
@endsection