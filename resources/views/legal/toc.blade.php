@extends('layouts.legal', ['title' => __('Legal'), 'darkBg' => true])

@section('content')
    <div class="container py-4">
        <div class="text-left py-4">
            <h1 class="w-75">
                {{ __('Terms of Service') }}
            </h1>
            <h2 class="h6 mt-4 w-50">
                Last modified: <em>xxx</em>
            </h2>
        </div>

        <div class="row mt-3 pt-4">
            <div class="col-8">
                @for($i=0; $i < 5; $i++)
                    <section class="mb-5">
                        <h3>Single-origin coffee brooklyn</h3>
                        <p>
                            Lorem ipsum dolor amet coloring book marfa dreamcatcher, synth chicharrones blog lo-fi you probably haven't heard of them adaptogen locavore air plant. Hoodie leggings synth, hella iPhone air plant single-origin coffee. Hashtag health goth before they sold out pickled marfa authentic vaporware tousled swag tacos hot chicken next level kitsch. Umami squid organic, chia beard readymade ethical keytar waistcoat meh poke cloud bread sriracha. Retro semiotics put a bird on it gastropub deep v tumeric selvage. Cornhole blog dreamcatcher chillwave, four loko distillery selfies bicycle rights mixtape.
                        </p>
                        <p>
                            Single-origin coffee brooklyn mumblecore, succulents keffiyeh swag salvia raw denim farm-to-table readymade craft beer taxidermy. Selvage waistcoat art party narwhal banh mi iPhone copper mug. Palo santo typewriter wolf everyday carry ethical semiotics, gastropub cronut tattooed deep v tumblr readymade. Hoodie asymmetrical authentic, woke banh mi you probably haven't heard of them edison bulb raclette pok pok forage. Kogi deep v cardigan celiac sriracha pinterest sustainable migas direct trade man braid sartorial banjo. Lyft ramps shabby chic readymade. Green juice disrupt lumbersexual, put a bird on it typewriter actually tousled celiac pug <slow-carb class=""></slow-carb>
                        </p>
                    </section>
                @endfor
            </div>
        </div>
    </div>
@endsection
