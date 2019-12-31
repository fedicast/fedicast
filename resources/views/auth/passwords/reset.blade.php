@extends('layouts.auth')

@section('sidebar')
    <h1 class="h3 mb-3">{{ __('Reset Password') }}</h1>
@endsection

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label for="email" class=" col-form-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email"
                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                   name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                   autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="col-form-label">{{ __('Password') }}</label>

            <input id="password" type="password"
                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm"
                   class="col-form-label">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control form-control-lg"
                   name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection
