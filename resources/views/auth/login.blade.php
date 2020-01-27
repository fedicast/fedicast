@extends('layouts.auth', ['bodyClass' => 'auth-grad'])

@section('sidebar')
    <h1 class="h3 mb-3">{{ __('Login') }}</h1>

    <p class="mb-0">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </p>
@endsection


@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email"
                   class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password"
                   class="col-form-label">{{ __('Password') }}</label>

            <input id="password" type="password"
                   class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                   required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="form-group mb-0 d-flex flex-row">
            <div class="flex-grow-1">
                <button type="submit" class="btn btn-lg btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </form>
@endsection
