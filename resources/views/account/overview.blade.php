@extends('layouts.account')

@section('content')
    <div class="container py-6">
        <div class="row">
            <div class="col-4">
                <div class="d-flex flex-row align-items-center mb-4" style="min-height:45px;">
                    <h3 class="mb-0 flex-grow-1">{{ __('Notifications') }}</h3>
                </div>

                @for($x=0; $x<6; $x++)
                    <div class="d-flex align-items-center pb-3 border-bottom my-3">
                        <img src="https://i.pravatar.cc/75?{{rand(0, 1000)}}" width="35" height="35" class="rounded-circle flex-shrink-0" />
                        <span class="flex-grow-1 ml-3">
                            <strong>some_user_94</strong> favourited an episode on <strong>booming beats</strong>, 4 minutes ago
                        </span>
                    </div>
                @endfor

                <a href="{{ route('user.notifications') }}">View more</a>

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

                <a href="{{ route('user.activity') }}" class="float-right">View more activity</a>
            </div>
        </div>
    </div>
@endsection
