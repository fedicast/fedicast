@extends('layouts.auth')

@section('sidebar')
    <h1 class="h3 mb-3">{{ __('Reset Password') }}</h1>
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group mb-0 d-flex flex-row">
            <div class="flex-grow-1">
                <button type="submit" class="btn btn-lg btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            <a class="btn btn-link pr-0" href="{{ route('login') }}">
                {{ __('Cancel') }}
            </a>
        </div>
    </form>
@endsection
