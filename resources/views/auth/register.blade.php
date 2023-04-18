@extends('layouts.app')

@section('title')
   careerfair|Register
@endsection
@section('content')
<div class="authmain">  
    
    <form method="POST" action="{{ route('register') }}" class="logform">
        @csrf
        <h1>{{ __('Register') }}</h1>
        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" placeholder="Enter name" autofocus>
       @error('name')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="email">{{ __('Email Address') }}</label>
        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">
        @error('email')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="@error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password" placeholder="Enter Password">
        @error('password')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" name="password_confirmation" required
            autocomplete="new-password" placeholder="Confirm password">
        <button type="submit" class=" btn-primary">
            {{ __('Register') }}
        </button>
    </form>
</div>
@endsection