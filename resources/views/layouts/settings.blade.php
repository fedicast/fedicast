@extends('layouts.app')

@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav with-bottom-bordered-current mr-auto">
            <li class="nav-item {{ (request()->routeIs('user.settings')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.settings') }}">{{ __('General') }}</a>
            </li>
            <li class="nav-item {{ (request()->routeIs('user.settings.billing')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.settings.billing') }}">{{ __('Billing') }}</a>
            </li>
            <li class="nav-item {{ (request()->routeIs('user.settings.plan')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('user.settings.plan') }}">{{ __('Plan') }}</a>
            </li>
            <li class="nav-item  mr-2">
                <a class="nav-link" href="{{ route('user.overview', ['username' => \Auth::user()->name]) }}">{{ __('Dashboard') }}</a>
            </li>
        </ul>
    </div>
@endsection
