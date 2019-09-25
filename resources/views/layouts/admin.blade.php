@extends('layouts.app')

@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav with-bottom-bordered-current mr-auto">
            <li class="nav-item {{ (request()->routeIs('admin.overview')) ? 'current-nav-item' : '' }} mr-2">
                <a class="nav-link" href="{{ route('admin.overview') }}">{{ __('Overview') }}</a>
            </li>
        </ul>
    </div>
@endsection
