@extends('layouts.settings')

@section('content')
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <!-- Username -->
                <form>
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Username') }}</h2>
                            This is your <em>optional</em> main url namespace on the FediCast platform.

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="domain-addon">fedicast.com/</span>
                                </div>
                                <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="domain-addon">
                            </div>
                            <small class="form-text text-muted">Please use a maximum of 48 characters and no spaces.</small>

                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>More information</small></a></span>
                            <button type="submit" class="btn btn-sm btn-dark">Save</button>
                        </div>
                    </div>
                </form>
                <!-- ./ username -->

                <!-- Display Name -->
                <form>
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Display Name') }}</h2>
                            Please enter your name or a display name you are comfortable with being public.

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="domain-addon">fedicast.com/</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Sam" aria-label="Display Name" aria-describedby="domain-addon">
                            </div>
                            <small class="form-text text-muted">Please use a maximum of 32 characters.</small>

                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>More information</small></a></span>
                            <button type="submit" class="btn btn-sm btn-dark">Save</button>
                        </div>
                    </div>
                </form>
                <!-- ./ display name -->

                <!-- Display Name -->
                <form>
                    @csrf
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>{{ __('Email Address') }}</h2>
                            Please enter your name or a display name you are comfortable with being public.
                            <input type="text" class="form-control mt-3" placeholder="me@example.com" aria-label="Display Name" aria-describedby="domain-addon">
                            <small class="form-text text-muted">We will email you to verify this change.</small>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>More information</small></a></span>
                            <button type="submit" class="btn btn-sm btn-dark" disabled>Save</button>
                        </div>
                    </div>
                </form>
                <!-- ./ display name -->

                <!-- Avatar -->
                <form>
                    @csrf
                    <div class="card">
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
                            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>More information</small></a></span>
                            <button type="submit" class="btn btn-sm btn-dark">Save</button>
                        </div>
                    </div>
                </form>
                <!-- ./ avatar -->

            </div>
        </div>
    </div>
@endsection
