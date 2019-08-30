@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card auth shadow">
                    <div class="card-body">
                        <h1 class="h3">{{ __('Register') }}</h1>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

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
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
