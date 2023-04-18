@extends('layouts.app')
@section('title')
    CareerFair | home
@endsection    
@section('content')
<div class="container">
    <h1> {{ __('Dashboard') }}</h1>
    @if (session('status'))
    <div role="alert">
        {{ session('status') }}
    </div>
    @endif

    <h3>
        {{ Auth::user()->name }}
    <h3>
    <p>{{ __('You are logged in!') }}</p>
</div>
@endsection