@extends('layouts.app')

@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav with-bottom-bordered-current mr-auto">
            <li class="nav-item current-nav-item mr-2">
                <a class="nav-link" href="{{ route('user.activity') }}">{{ __('Your Activity') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-6">

        <strong>{{ date('F, Y') }}</strong>
        <ul class="list-group list-g list-group-flush mb-5">
            <li class="list-group-item bg-transparent">
                You logged in from the browser xyz
                <span class="d-inline-block text-muted float-right">today</span>
            </li>
            <li class="list-group-item bg-transparent">
                You created the podcast <a href="#">booming sounds</a>
                <span class="d-inline-block text-muted float-right">2d</span>
            </li>
            <li class="list-group-item bg-transparent">
                You reset your username to nothing
                <span class="d-inline-block text-muted float-right">2d</span>
            </li>
            <li class="list-group-item bg-transparent">
                You changed your username to photogabble
                <span class="d-inline-block text-muted float-right">3d</span>
            </li>
            <li class="list-group-item bg-transparent">
                You created your account
                <span class="d-inline-block text-muted float-right">4d</span>
            </li>
        </ul>

        <strong>{{ date('F, Y') }}</strong>
        <ul class="list-group list-g list-group-flush mb-5">
            <li class="list-group-item bg-transparent">
                You logged in from the browser xyz
                <span class="d-inline-block text-muted float-right">today</span>
            </li>
            <li class="list-group-item bg-transparent">
                You created the podcast <a href="#">booming sounds</a>
                <span class="d-inline-block text-muted float-right">2d</span>
            </li>
            <li class="list-group-item bg-transparent">
                You reset your username to nothing
                <span class="d-inline-block text-muted float-right">2d</span>
            </li>
            <li class="list-group-item bg-transparent">
                You changed your username to photogabble
                <span class="d-inline-block text-muted float-right">3d</span>
            </li>
            <li class="list-group-item bg-transparent">
                You created your account
                <span class="d-inline-block text-muted float-right">4d</span>
            </li>
        </ul>

    </div>
@endsection
