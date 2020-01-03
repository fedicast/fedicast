@extends('layouts.auth')

@section('sidebar')
    <h1 class="h3 mb-3">{{ __('Register') }}</h1>
    <p>
        ...
    </p>

    <hr>

    <p class="mb-0">
        <a href="{{ route('home') }}">{{ __('Changed your mind? Click here to go back.') }}</a>
    </p>
@endsection


@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="hidden" name="is_supporter" value="{{  request('supporter', 0) }}" />

        <div class="form-group">
            <label for="name" class="col-form-label">{{ __('Name') }}</label>

            <input id="name" type="text"
                   class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email"
                   class="col-form-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email"
                   class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email">

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
                   required autocomplete="new-password">

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
            <p>By clicking "{{ __('Register') }}" you are agreeing to the <a href="{{ route('legal.toc') }}">{{ __('Terms of Service') }}</a>. For more information on how we use and protect the information you submit please see our <a href="{{ route('legal.privacy') }}">{{ __('Privacy Policy') }}</a>.</p>


            <button type="submit" class="btn btn-lg btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>
@endsection
