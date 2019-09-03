@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">{{ __('About') }}</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('about') }}">{{ __('About') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.references') }}">{{ __('References') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-4">
        <div>
            <p>
                Some explanation for why this project exists should go here...
            </p>
        </div>
    </div>
@endsection
