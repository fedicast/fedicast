@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Support</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Sublink One') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Sublink Two') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Sublink Three') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <h1>Support</h1>
@endsection
