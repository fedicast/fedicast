@extends('layouts.public')

@section('main-nav-left')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('documentation') }}">{{ __('Documentation') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('documentation.tutorials') }}">{{ __('Tutorials') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('documentation.faq') }}">{{ __('FAQ') }}</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ __('Reference') }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('documentation.api.mastodon') }}">{{ __('Mastodon API') }}</a>
                <a class="dropdown-item" href="{{ route('documentation.api.fedicast') }}">{{ __('FediCast API') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://github.com/fedicast/fedicast/issues">{{ __('Github Issues') }} <span class="badge badge-secondary">5</span></a>
            </div>
        </li>
    </ul>
@endsection
