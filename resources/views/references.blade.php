@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">{{ __('References') }}</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('about.references') }}">{{ __('References') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-4">
        <div>
            <p>
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
                    href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            </p>
            <p>
                <a href="https://thenounproject.com/browse/?i=2817022#">Mic svg by Oleksandr Panasovskyi from the Noun Project</a>
            </p>
        </div>
    </div>
@endsection


