@extends('layouts.account')

@section('content')
    <div class="container py-6">
        <div class="row">
            <div class="col-3">
                <div class="d-flex flex-row align-items-center mb-4" style="min-height:45px;">
                    <h3 class="mb-0 flex-grow-1">{{ __('Notifications') }}</h3>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">Cras justo odio</li>
                    <li class="list-group-item bg-transparent">Dapibus ac facilisis in</li>
                    <li class="list-group-item bg-transparent">Morbi leo risus</li>
                    <li class="list-group-item bg-transparent">Porta ac consectetur ac</li>
                    <li class="list-group-item bg-transparent">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col clearfix">
                <div class="d-flex flex-row align-items-center mb-4" style="min-height:45px;">
                    <h3 class="mb-0 flex-grow-1">{{ __('Recent Activity') }}</h3>
                    <a href="#" class="btn btn-lg btn-primary">{{ __('New Podcast') }}</a>
                </div>

                <ul class="list-group list-group-flush mb-3">
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

                <a href="#" class="float-right">View more activity</a>
            </div>
        </div>
    </div>
@endsection
