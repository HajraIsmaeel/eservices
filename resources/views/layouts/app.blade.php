<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/reg.css') }}" rel="stylesheet">
</head>

<body>
    <nav><ul>
        
        <a class="navbar-brand" href="{{ url('/') }}">Careerfair</a>
          
        <ul>
            @guest
            @if (Route::has('login'))
            <li>
                <a href="/login">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li>
                <a href="/register">{{ __('Register') }}</a>
            </li>
            @endif
            @else
                 
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>
            </form>
            @endguest
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('../js/app.js') }}"></script>
@yield('script')
</body>

</html>