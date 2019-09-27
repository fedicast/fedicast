@extends('layouts.base')
@section('base.body')
<div>
    <nav class="navbar container py-5 justify-content-center">
        <a class="navbar-brand mr-0" href="{{ url('/') }}" style="font-size: 2.7rem;">
            <img src="{{ asset('/images/wifi.svg') }}" width="60" height="60" class="d-inline-block align-top" alt="">
            {{ config('app.name') }}
        </a>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="container text-center my-5">
        Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
                href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
    </footer>

</div>
@endsection
