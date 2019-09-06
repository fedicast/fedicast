@extends('layouts.base')
@section('base.body')
    <nav class="navbar navbar-expand-md {{ !isset($darkBg) ? 'navbar-light' : 'navbar-dark' }} @if(!in_array_array(['sub-navigation', 'banner-header'], array_keys(View::getSections()))) bg-white border-bottom @elseif(in_array('banner-header', array_keys(View::getSections()))) bg-white @endif py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/images/wifi.svg') }}" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        @include('layouts._partials.auth-dropdown')
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @hasSection('sub-navigation')
        <nav class="navbar navbar-expand-md {{ !isset($darkBg) ? 'navbar-light' : 'navbar-dark' }}">
            <div class="container">
                @yield('sub-navigation')
            </div>
        </nav>
    @endif

    <main id="app" class="flex-shrink-0">
        @yield('content')
    </main>

    @include('layouts._partials.bigfoot')
@endsection
