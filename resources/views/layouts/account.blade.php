@extends('layouts.app')


@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav mr-auto">
            <li class="nav- mr-2" style="border-bottom: 3px solid #d8d8d8;">
                <a class="nav-link" href="{{ route('user.overview', ['username' => \Auth::user()->name]) }}">{{ __('Overview') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{ route('user.podcasts', ['username' => \Auth::user()->name]) }}">{{ __('Podcasts') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{ route('user.domains', ['username' => \Auth::user()->name]) }}">{{ __('Domains') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{ route('user.usage', ['username' => \Auth::user()->name]) }}">{{ __('Usage') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{ route('user.settings', ['username' => \Auth::user()->name]) }}">{{ __('Settings') }}</a>
            </li>
        </ul>
    </div>
@endsection
