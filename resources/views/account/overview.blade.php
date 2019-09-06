@extends('layouts.app')

@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav mr-auto">
            <li class="nav- mr-2" style="border-bottom: 3px solid #d8d8d8;">
                <a class="nav-link" href="#">{{ __('Overview') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="#">{{ __('Podcasts') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="#">{{ __('Domains') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="#">{{ __('Usage') }}</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="#">{{ __('Settings') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
