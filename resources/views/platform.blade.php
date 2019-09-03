@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Platform</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('platform') }}">{{ __('Introduction') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Features') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Federation') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div>Main content...</div>
    </div>
@endsection
