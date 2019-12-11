@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">{{ $title }}</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.index') }}">{{ __('Archive') }}</a>
            </li>
        </ul>
    </div>
@endsection
