@extends('layouts.app')

@section('content')
    <div class="container">
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

                        @if(!Auth::user()->hasVerifiedEmail())
                            @if (Session::get('resent', false) === false)
                            <form id="verify-email-link" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <p>Please Verify your email. If you haven't received your email <a href="#" onclick="getElementById('verify-email-link').submit(); return false;">click here to
                                        resend</a>.</p>
                            </form>
                            @else
                                <p>Your verification email has been resent.</p>
                            @endif
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
