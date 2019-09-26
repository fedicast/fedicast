@extends('layouts.settings')

@section('content')

    <?php
        /** @var \Illuminate\Support\ViewErrorBag $errors */
        /** @var \App\User $user */
        $user = Auth::user();
        /** @var \Illuminate\Support\MessageBag $messages */
        $messages = session()->get('messages', new \Illuminate\Support\MessageBag());
    ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Reserved usernames limit') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        You have reached the maximum number of reserved usernames; because name changes result in
                        previous username urls being redirected to your current one in order to avoid abuse
                        this has been limited to six.
                    </p>
                    <p>
                        If you would like to change your username again, please check the history and release an
                        older username you're not using.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

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

                        <div class="collapse" id="usernameHistory">
                            <table class="table table-dark table-striped ">
                                <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Chosen</th>
                                    <th scope="col">Retained Until</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->identities as $identity)
                                <tr>
                                    <th scope="row">{{ $identity->name }}</th>
                                    <td>{{ $identity->created_at->ago() }}</td>
                                    <td>{{ $identity->id == $user->identity_id ? __('current username') : $identity->created_at->addYears(3)->ago() }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-light" {{ ($identity->id != $user->identity_id) ? 'disabled' : '' }}disabled>{{__('Release')}}</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1">
                                <a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a>
                            </span>

                            @if($user->identities->count() > 0)
                            <button class="btn btn-sm btn-outline-dark mr-2" type="button" data-toggle="collapse" data-target="#usernameHistory" aria-expanded="false" aria-controls="usernameHistory">
                                {{ __('History') }}
                            </button>
                            @endif

                            @if($user->identities->count() < 6)
                            <button type="submit" class="btn btn-sm btn-dark">{{ __('Save') }}</button>
                            @else
                            <button type="button" class="btn btn-sm btn-dark disabled" data-toggle="modal" data-target="#exampleModalCenter">{{ __('Save') }}</button>
                            @endif
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
                <form method="post" action="{{ route('user.settings.delete') }}">
                    @csrf
                    @method('delete')

                    <div class="card">
                        <div class="card-body">
                            <h2>{{ __('Delete your account') }}</h2>
                            This action will queue the deletion of your account and the removal of all
                            account data, there will be a cool-down period of 14 days after which this
                            action is irreversible.

                            <div class="form-check border-top mt-3 pt-3">
                                <input name="i-understand" class="form-check-input" type="checkbox" value="1" id="delete-account-check" onchange="getElementById('delete-account-btn').disabled = !this.checked">
                                <label class="form-check-label" for="delete-account-check">
                                    I understand that by requesting account deletion all account data will be permanently destroyed.
                                </label>
                            </div>

                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a></span>
                            <button id="delete-account-btn" type="submit" class="btn btn-sm btn-danger" disabled>Request account deletion</button>
                        </div>
                    </div>
                </form>
                <!-- ./ account removal -->

            </div>
        </div>
    </div>
@endsection
