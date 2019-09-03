@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Documentation</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('support') }}">{{ __('Community') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('documentation') }}">{{ __('Documentation') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/fedicast/fedicast/issues">{{ __('Github Issues') }} <span class="badge badge-secondary">5</span></a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <h1>Documentation</h1>
@endsection
