@extends('layouts.app')

@section('sub-navigation')
    <div class="collapse navbar-collapse" id="subNavigation">
        <ul class="navbar-nav with-bottom-bordered-current mr-auto">
            <li class="nav-item current-nav-item mr-2">
                <a class="nav-link" href="{{ route('user.notifications') }}">{{ __('Notifications') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-6">
        <div class="row">
            <div class="col-3">
                <a href="#" class="btn btn-md btn-info text-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Unread</span>
                    <span class="badge badge-light">16</span>
                    <span class="sr-only">unread messages</span>
                </a>
                <a href="#" class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Read </span>
                    <span class="badge">7</span>
                    <span class="sr-only">unread messages</span>
                </a>
                <a href="#" class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Bookmarked </span>
                    <span class="badge">3</span>
                    <span class="sr-only">unread messages</span>
                </a>
                <a href="#" class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <small>All notifications</small>
                </a>

                <hr/>

                <a href="#" class="btn btn-sm btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Podcast Name</span>
                    <span class="badge">3</span>
                    <span class="sr-only">unread messages</span>
                </a>

                <a href="#" class="btn btn-sm btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Team Name / Podcast Name</span>
                    <span class="badge">3</span>
                    <span class="sr-only">unread messages</span>
                </a>
            </div>

            <div class="col">
                @for($i=0; $i<7;$i++)
                <div class="card mb-4">
                    <div class="card-header py-2 d-flex align-items-center">
                        <strong class="flex-grow-1 m-0">Podcast Name</strong>
                        <a href="#" class="btn btn-xs btn-outline-dark">✔</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center"><span class="flex-grow-1">Cras justo odio</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a></li>
                        <li class="list-group-item d-flex align-items-center"><span class="flex-grow-1">Dapibus ac facilisis in</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a></li>
                        <li class="list-group-item d-flex align-items-center"><span class="flex-grow-1">Vestibulum at eros</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a></li>
                    </ul>
                </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
