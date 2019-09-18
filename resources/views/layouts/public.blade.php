@extends('layouts.base')
@section('base.body')
    <nav class="navbar navbar-expand-md {{ !isset($darkBg) ? 'navbar-light' : 'navbar-dark' }} @if(!in_array_array(['sub-navigation', 'banner-header'], array_keys(View::getSections()))) bg-white border-bottom @elseif(in_array('banner-header', array_keys(View::getSections()))) bg-white @endif py-3">
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('timeline') }}">{{ __('Public Timeline') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('platform') }}">{{ __('Platform') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a></li>
                    </ul>
                @show

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('Support') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('support') }}">{{ __('Community') }}</a>
                            <a class="dropdown-item" href="{{ route('documentation') }}">{{ __('Documentation') }}</a>
                            <a class="dropdown-item" href="{{ route('documentation.faq') }}">{{ __('FAQ') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://github.com/fedicast/fedicast/issues">{{ __('Github Issues') }} <span class="badge badge-secondary">{{ getGithubIssuesCount() }}</span></a>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><strong>{{ __('Join Free') }}</strong></a>
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

    @yield('banner-header')

    <main id="app" class="flex-shrink-0">
        @yield('content')
    </main>

    @include('layouts._partials.bigfoot')
@endsection
