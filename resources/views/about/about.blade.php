@extends('layouts.about', ['title' => __('About')])

@section('content')
    <div class="container py-4">
        <div class="text-center py-4">
            <h1>
                FediCast's purpose is to bridge the world of Podcasts with the Fediverse through ActivityPub
            </h1>
        </div>

        <div class="row justify-content-center mt-5 pt-4 border-top text-center">
            <div class="col">
                <h2>1 Users</h2>
            </div>
            <div class="col">
                <h2>0 Listens</h2>
            </div>
            <div class="col">
                <h2>0 Favourites</h2>
            </div>
            <div class="col">
                <h2>0 Peers</h2>
            </div>

        </div>

        <div class="row justify-content-center mt-3 pt-4 border-top">
            <div class="col-8">
                <p>
                    <strong>readme.md</strong>
                </p>
                <p>
                    Lorem ipsum dolor amet coloring book marfa dreamcatcher, synth chicharrones blog lo-fi you probably haven't heard of them adaptogen locavore air plant. Hoodie leggings synth, hella iPhone air plant single-origin coffee. Hashtag health goth before they sold out pickled marfa authentic vaporware tousled swag tacos hot chicken next level kitsch. Umami squid organic, chia beard readymade ethical keytar waistcoat meh poke cloud bread sriracha. Retro semiotics put a bird on it gastropub deep v tumeric selvage. Cornhole blog dreamcatcher chillwave, four loko distillery selfies bicycle rights mixtape.
                </p>
                <p>
                    Single-origin coffee brooklyn mumblecore, succulents keffiyeh swag salvia raw denim farm-to-table readymade craft beer taxidermy. Selvage waistcoat art party narwhal banh mi iPhone copper mug. Palo santo typewriter wolf everyday carry ethical semiotics, gastropub cronut tattooed deep v tumblr readymade. Hoodie asymmetrical authentic, woke banh mi you probably haven't heard of them edison bulb raclette pok pok forage. Kogi deep v cardigan celiac sriracha pinterest sustainable migas direct trade man braid sartorial banjo. Lyft ramps shabby chic readymade. Green juice disrupt lumbersexual, put a bird on it typewriter actually tousled celiac pug <slow-carb class=""></slow-carb>
                </p>
            </div>
        </div>



        <div class="row mt-3 pt-4 border-top">
            <div class="col">
                <h2 class="h5 mb-3 d-flex align-items-center">
                    <span class="icon-circle bg-white rounded-circle shadow mr-3">
                        <i class="fas fa-code"></i>
                    </span>
                    Free open sourcecode
                </h2>
                <p>
                    The sourcecode behind FediCast is provided free, MIT Licensed for anyone with enough
                    technical knowledge to set up their own install.
                </p>
            </div>
            <div class="col">
                <h2 class="h5 mb-3 d-flex align-items-center">
                    <span class="icon-circle bg-white rounded-circle shadow mr-3">
                        <img src="{{asset('images/ActivityPub-logo-symbol.svg')}}" class="w-100 h-100"/>
                    </span>
                    A decentralised open platform
                </h2>
                <p>
                    Through support of the ActivityPub protocol, FediCast is able to share audio within a decentralized, open network.
                </p>
            </div>
            <div class="col">
                <h2 class="h5 mb-3 d-flex align-items-center">
                    <span class="icon-circle bg-white rounded-circle shadow mr-3">
                        <i class="fas fa-users"></i>
                    </span>
                    For the community
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu augue turpis. Fusce eleifend, turpis et viverra tincidunt, nisl elit.
                </p>
            </div>
        </div>



    </div>
@endsection
