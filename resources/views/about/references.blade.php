@extends('layouts.about', ['title' => __('References')])

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                <div class="card" style="min-height: 225px;">
                    <div class="card-body">
                        <h5 class="card-title">FediCast Logo</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Wifi free icon by Freepik</h6>
                        <p class="card-text">
                            The icon used as the "logo" for the FediCast project came from the coffee shop
                            pack by freepik on Flaticon.
                        </p>
                        <a href="https://www.flaticon.com/free-icon/wifi_808858" class="card-link">Source</a>
                        <a href="https://www.flaticon.com/authors/freepik" class="card-link">Author</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="min-height: 225px;">
                    <div class="card-body">
                        <h5 class="card-title">Welcome page Mic Vector</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Mic svg by Oleksandr Panasovskyi</h6>
                        <p class="card-text">
                            The vector used on the welcome page was sourced from the Noun Project.
                        </p>
                        <a href="https://thenounproject.com/browse/?i=2817022#" class="card-link">Source</a>
                        <a href="https://thenounproject.com/a.panasovsky/" class="card-link">Author</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


