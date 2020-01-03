@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Pricing</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pricing') }}">{{ __('Plans') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('support') }}">{{ __('Support') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-4">
        <div class="text-center py-4">
            <h1>
                Free Forever, with a supporter tier for those who can
            </h1>
        </div>

        <div class="row my-5">
            <div class="col">
                <ul class="pricing-list-group summary list-group list-group-flush">
                    <li class="list-group-item bg-transparent"><strong>Podcasts</strong><br>
                        <small>Each has its own fedicast.com/@username</small>
                    </li>
                    <li class="list-group-item bg-transparent"><strong>Third party domains</strong><br>
                        <small>Purchased via a third party, e.g <a href="https://porkbun.com">porkbun</a></small>
                    </li>
                    <li class="list-group-item bg-transparent"><strong>Bandwidth</strong><br>
                        <small>Consumed by people downloading to listen</small>
                    </li>
                    <li class="list-group-item bg-transparent"><strong>Maximum Filesize</strong><br>
                        <small>How large your audio source files can be (per file)</small>
                    </li>
                    <li class="list-group-item bg-transparent"><strong>Additional Team Members</strong><br>
                        <small>Number of additional users who can manage a podcast</small>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="card border-0 shadow" style="min-height: 225px;">
                    <div class="card-body text-center">
                        <h2 class="card-title">Free</h2>

                        <ul class="pricing-list-group pricing list-group list-group-flush mb-3">
                            <li class="list-group-item bg-transparent border-top-0">5</li>
                            <li class="list-group-item bg-transparent"><i class="icon-infinity"></i> / 1
                                per podcast
                            </li>
                            <li class="list-group-item bg-transparent">100GB/mo&dagger;</li>
                            <li class="list-group-item bg-transparent">100MB</li>
                            <li class="list-group-item bg-transparent">3</li>
                        </ul>

                        <p class="h1 py-2">
                            <strong>£0.00</strong><sup
                                style="margin-left: 0.5rem;font-size: 1.2rem;top: -0.5rem;">/mo</sup>
                        </p>

                        @if(Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-lg w-50">Join Free</a>
                        @elseif(Route::has('register.queue'))
                            <a href="{{ route('register.queue') }}" class="btn btn-outline-dark btn-lg w-50">Join Queue</a>
                            <div class="d-block text-left mt-4 border p-2 small bg-light rounded">Registration is currently closed to new users, click above to register interest and be the first to know when a slot opens up.</div>
                        @else
                            <p class="h4 py-1">
                                Registration is currently closed to new users.
                            </p>
                        @endif
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card border-0 shadow" style="min-height: 225px;">
                    <div class="card-body text-center">
                        <h2 class="card-title">Supporter*</h2>
                        <ul class="pricing-list-group pricing list-group list-group-flush mb-3">
                            <li class="list-group-item bg-transparent border-top-0"><i class="icon-infinity"></i></li>
                            <li class="list-group-item bg-transparent"><i class="icon-infinity"></i> / 1
                                per podcast
                            </li>
                            <li class="list-group-item bg-transparent"><i class="icon-infinity"></i></li>
                            <li class="list-group-item bg-transparent">1GB</li>
                            <li class="list-group-item bg-transparent"><i class="icon-infinity"></i></li>
                        </ul>

                        <p class="h1 py-2">
                            <strong>£2.99</strong><sup style="margin-left: 0.5rem;font-size: 1.2rem;top: -0.5rem;">/mo</sup>
                        </p>
                        @if(Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-lg w-50">Join</a>
                        @elseif(Route::has('register.queue'))
                            <a href="{{ route('register.queue', ['supporter' => true]) }}" class="btn btn-outline-dark btn-lg w-50">Join Queue</a>
                            <div class="d-block text-left mt-4 border p-2 small bg-light rounded">Registration is currently closed to new users, click above to register interest and be the first to know when a slot opens up.</div>
                        @else
                            <p class="h4 py-1">
                                Registration is currently closed to new users.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3 pt-4 border-top">
            <div class="col-8">
                <p>
                    <strong>* Why have a paid for tier?</strong>
                </p>
                <p>
                    FediCast is and will forever be a <em>free service</em> it does however come at a cost to those who run it and
                    hosting isn't free. Other projects such as <a href="https://www.joinmastodon.org/">Mastodon</a> and
                    <a href="https://funkwhale.audio">Funkwhale</a> support themselves through donations, the former through Pateron
                    and the later via ad-hock donations or yearly membership to their open collective. Our free tier's
                    limits have been carefully balanced in such a way that they should be enough for most users.
                </p>
                <p>
                    While not currently a part of the <a href="https://opencollective.com/">Open Collective</a> FediCast likes to
                    be open with how the funds as raised are spent, <a href="{{ route('about.budget') }}">click here to see this years budget</a>.
                </p>

                <hr/>

                <p>
                    <strong>&dagger; Bandwidth Limits</strong>
                </p>
                <p>
                    An average podcast encoded in 64kbps mono works out to be about 25MB per hour of audio. The free 100GB/mo
                    therefore equals approximately 4,000 downloads.
                </p>
            </div>
        </div>
    </div>
@endsection
