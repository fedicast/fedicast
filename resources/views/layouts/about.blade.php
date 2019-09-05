@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">{{ $title }}</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.budget') }}">{{ __('Budget') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.roadmap') }}">{{ __('Road Map') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.references') }}">{{ __('References') }}</a>
            </li>
        </ul>
    </div>
@endsection
