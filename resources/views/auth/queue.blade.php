@extends('layouts.auth', ['bodyClass' => 'auth-grad'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">

                <div class="card auth shadow col col-md-8">
                    <div class="row card-body">
                            <div class="col col-md-4 info-col">
                                <h1 class="h3 mb-3">{{ __('Join Registration Queue') }}</h1>

                                <p>
                                    {{ __('Account registrations are currently closed, you may however subscribe to the registration queue and receive an email when new registrations become available.') }}
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <a href="{{ route('home') }}">{{ __('Changed your mind? Click here to go back.') }}</a>
                                </p>
                            </div>
                            <div class="col col-md-8">
                                <form method="POST" action="#">
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

                                    <div class="form-group mb-0">
                                        <p>By clicking "{{ __('Join Queue') }}" you are agreeing to the <a href="{{ route('legal.toc') }}">{{ __('Terms of Service') }}</a>. For more information on how we use and protect the information you submit please see our <a href="{{ route('legal.privacy') }}">{{ __('Privacy Policy') }}</a>.</p>

                                        <button type="submit" class="btn btn-lg btn-primary">
                                            {{ __('Join Queue') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
