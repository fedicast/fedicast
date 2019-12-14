<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100 {{ isset($darkBg) ? 'bg-dark text-light' : '' }} {{ isset($bgGrad) ? 'with-grad' : '' }}">

@if(Auth::check() && !Auth::user()->hasVerifiedEmail())
<div class="bg-dark text-light py-2 text-center">
    @if (Session::get('resent', false) === false)
        <form id="verify-email-link" method="POST" action="{{ route('verification.resend') }}">
            @csrf
           Please Verify your email. If you haven't received your email <a href="#" onclick="getElementById('verify-email-link').submit(); return false;">click here to
                    resend</a>.
        </form>
    @else
        Your verification email has been resent.
    @endif
</div>
@endif
@yield('base.body')
</body>
</html>
