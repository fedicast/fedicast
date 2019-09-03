@extends('layouts.base')
@section('base.body')
    <nav class="navbar navbar-expand-md navbar-light @if(!in_array_array(['sub-navigation', 'banner-header'], array_keys(View::getSections()))) bg-white border-bottom @elseif(in_array('banner-header', array_keys(View::getSections()))) bg-white @endif py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/images/wifi.svg') }}" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                {{ config('app.name') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @section('main-nav-left')
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('platform') }}">{{ __('Platform') }}</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a></li>
                    </ul>
                @show

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">{{ __('Support') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><strong>{{ __('Join Free') }}</strong></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @hasSection('sub-navigation')
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                @yield('sub-navigation')
            </div>
        </nav>
    @endif

    @yield('banner-header')

    <main id="app" class="flex-shrink-0">
        @yield('content')
    </main>

    <!-- todo: make pretty -->

    <footer class="footer mt-auto py-4 border-top bg-white">
        <div class="container mt-auto">

            <div class="row mb-4">
                <div class="col">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                        <span class="nav-link">
                            <a  href="{{ route('login') }}">{{ __('Login') }}</a> /
                            <a  href="{{ route('register') }}">{{ __('Join Free') }}</a>
                        </span>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </nav>
                </div>
                <div class="col">
                    <nav class="nav flex-column">
                        <a class="nav-link " href="{{ route('platform') }}">{{ __('Platform') }}</a>
                        <a class="nav-link" href="#">{{ __('Features') }}</a>
                        <a class="nav-link" href="#">{{ __('Federation') }}</a>
                        <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                    </nav>
                </div>
                <div class="col">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="{{ route('support') }}">{{ __('Support') }}</a>
                        <a class="nav-link" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>

                        <a class="nav-link" href="{{ route('documentation') }}">{{ __('Documentation') }}</a>
                        <a class="nav-link" href="{{ route('documentation.tutorials') }}">{{ __('Tutorials') }}</a>
                        <span class="nav-link">
                            <a  href="{{ route('documentation.api.mastodon') }}">{{ __('Mastodon API') }}</a> /
                            <a  href="{{ route('documentation.api.fedicast') }}">{{ __('Fedicast API') }}</a>
                        </span>
                    </nav>
                </div>
                <div class="col">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">{{ __('Privacy Policy') }}</a>
                        <a class="nav-link" href="#">{{ __('Terms of Service') }}</a>
                        <a class="nav-link" href="{{ route('references') }}">{{ __('References') }}</a>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-8">&copy; FediCast 2019</div>
                <div class="col-4 text-right">
                    <a href="https://github.com/fedicast/fedicast/" style="font-size: 1.25rem;">
                        <i class="fab fa-github"></i>
                    </a> FediCast is Licenced MIT
                </div>
            </div>


        </div>
    </footer>
@endsection
