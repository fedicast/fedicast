@extends('layouts.public')

@section('sub-navigation')
    <strong class="navbar-brand">Budget</strong>
    <div class="collapse navbar-collapse small" id="subNavigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('about.budget') }}">{{ __('Budget') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.roadmap') }}">{{ __('Road Map') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.references') }}">{{ __('References') }}</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container py-4">

        <div class="text-center py-4">
            <h1>
                How do you use the money?
            </h1>
        </div>

        <div class="row justify-content-center mt-5 pt-4 border-top">
            <div class="col-8">
                <p>
                    <strong>2019-2020 Monthly Balance</strong>
                </p>
                <p>
                    Lorem ipsum dolor amet coloring book marfa dreamcatcher, synth chicharrones blog lo-fi you probably
                    haven't heard of them adaptogen locavore air plant. Hoodie leggings synth, hella iPhone air plant
                    single-origin coffee. Hashtag health goth before they sold out pickled marfa authentic vaporware
                    tousled swag tacos hot chicken next level kitsch. Umami squid organic, chia beard readymade ethical
                    keytar waistcoat meh poke cloud bread sriracha. Retro semiotics put a bird on it gastropub deep v
                    tumeric selvage. Cornhole blog dreamcatcher chillwave, four loko distillery selfies bicycle rights
                    mixtape.
                </p>

                <table class="table mb-0">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Revenue &ndash; {{ date('M Y') }}</th>
                        <th scope="col" class="text-right">£0.00</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Users Supporter Tier</th>
                        <td class="text-right">£0.00</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Expenses &ndash; {{ date('M Y') }}</th>
                        <th scope="col" class="text-right">£0.00</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Hosting</th>
                        <td class="text-right">~£35.14&dagger;</td>
                    </tr>
                    <tr>
                        <th scope="row">Domain Names</th>
                        <td class="text-right">£1.33<sup>&#8225;</sup></td>
                    </tr>
                    </tbody>
                    <tfoot class="thead-light">
                    <tr>
                        <th scope="col">Balance</th>
                        <th scope="col" class="text-right text-danger">-£33.81</th>
                    </tr>
                    </tfoot>
                </table>

                <p>
                    &dagger;Converted from EUR to GBP, <sup>&#8225;</sup>the .com domain name cost £15.99 per annum
                </p>
            </div>
        </div>
    </div>
@endsection
