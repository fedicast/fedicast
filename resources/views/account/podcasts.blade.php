@extends('layouts.account')

@section('content')
    <div class="container py-6">
        <div class="justify-content-center d-flex flex-wrap">
            <div class="col-7">
                @for($i=0; $i<4; $i++)
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2>Podcast Title</h2>
                            Blurb...
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <span class="flex-grow-1">
                                <a href="#"><i class="icon-help"></i> <small>{{ __('More information') }}</small></a>
                            </span>
                            <button type="submit" class="btn btn-sm btn-dark">{{ __('Manage') }}</button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
