@extends('layouts.public')

@section('content')
    <section class="welcome-banner border-bottom py-5 bg-beige">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ route('blog') }}" class="hero-blog-pill rounded-pill text-light">
                        <span class="badge badge-pill badge-success mr-2">New</span>
                        Blog title
                    </a>
                    <h1 class="mb-4">Welcome tagline text with some basic descriptor</h1>
                    <h2 class="h3 mb-5">A slightly longer subtitle that expands on the previous headline with more detail about why we are awesome</h2>
                    <a href="{{ route('register') }}" class="btn btn-dark">Join Free</a>
                    <a href="{{ route('platform') }}" class="btn btn-outline-dark">Learn More&hellip;</a>

                </div>
                <div class="col" style="background: url({{ asset('images/mic.svg') }}) no-repeat; opacity: 0.6; height: 580px; background-size: cover;" >
                    &nbsp;
                </div>
            </div>

        </div>
    </section>
@endsection
