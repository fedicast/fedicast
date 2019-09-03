@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Pricing</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Plans') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Support') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-4">
        <div>Main content...</div>
    </div>
@endsection
