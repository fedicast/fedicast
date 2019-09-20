@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card auth shadow">
                    <div class="card-body">
                        <h1 class="h3">{{ __('Account Removal Queued') }}</h1>
                        <p>
                            The removal of your account has been queued for two weeks from now. If you change your mind during that period
                            logging back into your account will cancel the process.
                        </p>
                        <p>
                            After the two week cool down period all account data will be destroyed and an emailed receipt will be sent
                            to the attached email address.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
