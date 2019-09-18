@extends('layouts.public')

@section('banner-header')
    <section class="bg-white border-bottom pt-5 pb-6">
        <div class="container">
            <h1>Sitemap</h1>
        </div>
    </section>
@endsection

@section('content')
    <div class="container py-6">

        @auth
            <div class="row border-top pt-3 mt-3 mb-6">
                <div class="col-3">
                    <h2 class="h4">Your Account</h2>
                </div>
                <div class="col">
                    <nav class="row nav ml-0">
                        <a class="nav-link col-4" href="#">{{ __('New Podcast') }}</a>
                        <a class="nav-link col-4" href="{{ route('user.overview') }}">{{ __('Dashboard') }}</a>
                        <a class="nav-link col-4" href="#">{{ __('Settings') }}</a>
                        <a class="nav-link col-4" href="#">{{ __('Account Activity') }}</a>
                        <a class="nav-link col-4" href="#">{{ __('Domains') }}</a>
                        <a class="nav-link col-4" href="#">{{ __('Usage') }}</a>
                        <a class="nav-link col-4" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                    </nav>
                </div>
            </div>
        @endif

        <div class="row border-top pt-3 mt-3 mb-6">
            <div class="col-3">
                <h2 class="h4">About</h2>
            </div>
            <div class="col">
                <nav class="row nav ml-0">
                    <a class="nav-link col-4" href="{{ route('about') }}">{{ __('About FediCast') }}</a>
                    <a class="nav-link col-4" href="{{ route('about.roadmap') }}">{{ __('Road Map') }}</a>
                    <a class="nav-link col-4" href="{{ route('blog') }}">{{ __('Blog') }}</a>
                    <a class="nav-link col-4" href="{{ route('platform') }}">{{ __('Platform') }}</a>
                    <a class="nav-link col-4" href="{{ route('platform.features') }}">{{ __('Features') }}</a>
                    <a class="nav-link col-4" href="{{ route('platform.federation') }}">{{ __('Federation') }}</a>
                    <a class="nav-link col-4" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                    <a class="nav-link col-4" href="{{ route('about.budget') }}">{{ __('Budget') }}</a>
                    <span class="nav-link col-4">
                        <a  href="{{ route('register') }}">{{ __('Join Free') }}</a> /
                        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                    </span>
                </nav>
            </div>
        </div>

        <div class="row border-top pt-3 mt-3 mb-6">
            <div class="col-3">
                <h2 class="h4">Resources</h2>
            </div>
            <div class="col">
                <nav class="row nav ml-0">
                    <a class="nav-link col-4" href="{{ route('support') }}">{{ __('Support') }}</a>
                    <a class="nav-link col-4" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>

                    <a class="nav-link col-4" href="{{ route('documentation') }}">{{ __('Documentation') }}</a>
                    <a class="nav-link col-4" href="{{ route('documentation.tutorials') }}">{{ __('Tutorials') }}</a>
                    <a class="nav-link col-4" href="{{ route('documentation.faq') }}">{{ __('FAQ') }}</a>
                    <a class="nav-link col-4" href="{{ route('about.references') }}">{{ __('References') }}</a>
                </nav>
            </div>
        </div>

        <div class="row border-top pt-3 mt-3 mb-6">
            <div class="col-3">
                <h2 class="h4">Developers</h2>
            </div>
            <div class="col">
                <nav class="row nav ml-0">
                    <span class="nav-link col-4">
                        <a  href="{{ route('documentation.api.mastodon') }}">{{ __('Mastodon API') }}</a> /
                        <a  href="{{ route('documentation.api.fedicast') }}">{{ __('Fedicast API') }}</a>
                    </span>
                    <a class="nav-link col-4" href="https://github.com/fedicast/fedicast/"><i class="icon-github-text"></i> {{ __('Source Code') }}</a>
                    <a class="nav-link col-4" href="https://github.com/fedicast/fedicast/issues">{{ __('Issue Tracker') }} <sup class="badge badge-secondary">{{ getGithubIssuesCount() }}</sup></a>
                </nav>
            </div>
        </div>

        <div class="row border-top pt-3 mt-3 mb-6">
            <div class="col-3">
                <h2 class="h4">Legal</h2>
            </div>
            <div class="col">
                <nav class="row nav ml-0">
                    <a class="nav-link col-4" href="{{ route('legal.privacy') }}">{{ __('Privacy Policy') }}</a>
                    <a class="nav-link col-4" href="{{ route('legal.toc') }}">{{ __('Terms of Service') }}</a>
                    <a class="nav-link col-4" href="{{ route('legal.coc') }}">{{ __('Code of Conduct') }}</a>
                </nav>
            </div>
        </div>

    </div>
@endsection
