@extends('layouts.app')

@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav with-bottom-bordered-current mr-auto">
            <li class="nav-item {{ (request()->routeIs('user.overview')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.overview', ['username' => \Auth::user()->name]) }}">{{ __('Overview') }}</a>
            </li>
            <li class="nav-item {{ (request()->routeIs('user.podcasts')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.podcasts', ['username' => \Auth::user()->name]) }}">{{ __('Podcasts') }}</a>
            </li>
            <li class="nav-item {{ (request()->routeIs('user.domains')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.domains', ['username' => \Auth::user()->name]) }}">{{ __('Domains') }}</a>
            </li>
            <li class="nav-item {{ (request()->routeIs('user.usage')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.usage', ['username' => \Auth::user()->name]) }}">{{ __('Usage') }}</a>
            </li>
            <li class="nav-item {{ (request()->routeIs('user.settings')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.settings') }}">{{ __('Settings') }}</a>
            </li>
        </ul>
    </div>
@endsection
