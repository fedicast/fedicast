@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Roadmap</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.budget') }}">{{ __('Budget') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('about.roadmap') }}">{{ __('Road Map') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.references') }}">{{ __('References') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center pt-4">
            <div class="col-8">
                <p>
                    <strong>Last amended 5th September 2019</strong>
                </p>
                <p>
                    A roadmap is a living document. Here we will layout our current feature road map and highlight any
                    known ETA's for when big features will be released.
                </p>
                <p>
                    For smaller fixes/enhancements and individual tickets, please refer to our <a href="https://github.com/fedicast/fedicast/">“milestones”</a> page on
                    GitHub.
                </p>
            </div>
        </div>
        <div class="row justify-content-center pt-4">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Moderation</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Anti-abuse toolset</h6>
                    <p class="card-text">Federated reports, Internal moderation notes, Screening for sign-ups</p>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
