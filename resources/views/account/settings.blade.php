@extends('layouts.settings')

@section('content')

    <?php
        /** @var \Illuminate\Support\ViewErrorBag $errors */
        /** @var \App\User $user */
        $user = Auth::user();
        /** @var \Illuminate\Support\MessageBag $messages */
        $messages = session()->get('messages', new \Illuminate\Support\MessageBag());
    ?>

    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <!-- Username -->
                <form method="post" action="{{ route('user.settings.update') }}">
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Username') }}</h2>
                            This is your <em>optional</em> main url namespace on the FediCast platform.
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="domain-addon">fedicast.com/</span>
                                </div>
                                <input name="username" type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : ($messages->has('username') ? 'is-valid' : '') }}" value="{{ old('username', $user->identity->name ?? '') }}" placeholder="username" aria-label="Username" aria-describedby="domain-addon">
                            </div>

                            @if ($error = $errors->first('username'))
                            <small class="form-text text-danger">{{ $error }}</small>
                            @elseif($msg = $messages->first('username'))
                            <small class="form-text text-success">{{ $msg }}</small>
                            @else
                            <small class="form-text text-muted">{{ __('Please use a maximum of 48 characters and no spaces.') }}</small>
                            @endif
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1">
                                <a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a>
                            </span>
                            <button type="submit" class="btn btn-sm btn-dark">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
                <!-- ./ username -->

                <!-- Display Name -->
                <form method="post" action="{{ route('user.settings.update') }}">
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Display Name') }}</h2>
                            Please enter your name or a display name you are comfortable with being public.
                            <input name="name" type="text" class="form-control mt-3 {{ $errors->has('name') ? 'is-invalid' : ($messages->has('name') ? 'is-valid' : '') }}" placeholder="Sam" value="{{ old('name', $user->name ?? '') }}" aria-label="{{ __('Display Name') }}" aria-describedby="display-name-extra">

                            @if ($error = $errors->first('name'))
                                <small id="display-name-extra" class="form-text text-danger">{{ $error }}</small>
                            @elseif($msg = $messages->first('name'))
                                <small id="display-name-extra" class="form-text text-success">{{ $msg }}</small>
                            @else
                                <small id="display-name-extra" class="form-text text-muted">{{ __('Please use a maximum of 32 characters.') }}</small>
                            @endif
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a></span>
                            <button type="submit" class="btn btn-sm btn-dark">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
                <!-- ./ display name -->

                <!-- Email -->
                <form method="post" action="{{ route('user.settings.update') }}">
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Email Address') }}</h2>
                            Please enter your name or a display name you are comfortable with being public.
                            <input name="email" type="text" class="form-control mt-3 {{ $errors->has('email') ? 'is-invalid' : ($messages->has('email') ? 'is-valid' : '') }}" placeholder="me@example.com" value="{{ old('email', $user->email ?? '') }}" aria-label="{{ __('Email Address') }}" aria-describedby="email-extra">

                            @if ($error = $errors->first('email'))
                                <small id="email-extra" class="form-text text-danger">{{ $error }}</small>
                            @elseif($msg = $messages->first('email'))
                                <small id="email-extra" class="form-text text-success">{{ $msg }}</small>
                            @else
                                <small id="email-extra" class="form-text text-muted">{{ __('We will email you to verify this change.') }}</small>
                            @endif
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a></span>
                            @if (!$user->hasVerifiedEmail() && !Session::get('resent', false))
                            <button type="button" class="btn btn-sm btn-outline-dark mr-2" onclick="getElementById('verify-email-link').submit(); return false;">{{ __('Resend Validation Email') }}</button>
                            @endif
                            <button type="submit" class="btn btn-sm btn-dark">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
                <!-- ./ email -->

                <!-- Avatar -->
                <form>
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Avatar') }}</h2>

                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    This is your display image, its optional.<br>
                                    Click on the circle to change yours.
                                </div>
                                <div>
                                    <img src="https://i.pravatar.cc/75" width="75" height="75" class="rounded-circle" />
                                </div>
                            </div>

                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a></span>
                            <button type="submit" class="btn btn-sm btn-dark">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
                <!-- ./ avatar -->

                <!-- Account Removal -->
                <form>
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ __('Delete your account') }}</h2>
                            This action will queue the deletion of your account and the removal of all
                            account data, there will be a cool-down period of 14 days after which this
                            action is irreversible.

                            <div class="form-check border-top mt-3 pt-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    I understand that by requesting account deletion all account data will be permanently destroyed.
                                </label>
                            </div>

                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a></span>
                            <button type="submit" class="btn btn-sm btn-danger" disabled>Request account deletion</button>
                        </div>
                    </div>
                </form>
                <!-- ./ account removal -->

            </div>
        </div>
    </div>
@endsection
