@extends('layouts.auth', ['bodyClass' => 'auth-grad'])

@section('sidebar')
    <h1 class="h3 mb-3">{{ __('Join Registration Queue') }}</h1>
@endsection

@section('content')

    <p>Thank you for your interest in joining the FediCast community. Your position in the queue is {{ $queueLength }}.</p>
    <p>We will send an email to you at <strong>{{ $model->email }}</strong> with an invite link once registrations open again.</p>
    <p class="mb-0"><a href="{{ route('home') }}">{{ __('Click here to go back to the homepage.') }}</a></p>
@endsection
