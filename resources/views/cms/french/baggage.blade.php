@extends('layouts.main')
@section('content')
    <section>
        <div class="baggage-page">

            <div class="luggage-trip-icon">
                <div class="container-rigid">
                    <figure>
                        @if(strpos($baggage->image1, "baggage/") !== false)
                            <img src="{{asset('').'storage/'.$baggage->image1}}">
                        @else
                            <img src="{{asset('').$baggage->image1}}">
                        @endif
                    </figure>
                    <div class="luggage-trip-title">
                        <h2>{{ $baggage->title1 }}</h2>
                        {!! $baggage->content1 !!}
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="luggage-checkin-row">

                    <div class="luggage-checkin-title">
                        <h2>{{ $baggage->title2 }}</h2>
                        {!! $baggage->content2 !!}
                    </div>

                    <div class="luggage-checkin-details-column">
                        <div class="checkin-weight">
                            <h3>{{ $baggage->title3 }}</h3>
                            {!! $baggage->content3 !!}
                        </div>

                        <div class="checkin-booking">
                            <h3>{{ $baggage->title4 }}</h3>
                            {!! $baggage->content4 !!}
                        </div>

                        {!! $baggage->content5 !!}
                    </div>
                    <div class="luggage-checkin-icon-column">
                        <figure>

                            @if(strpos($baggage->image2, "baggage/") !== false)
                                <img src="{{asset('').'storage/'.$baggage->image2}}">
                            @else
                                <img src="{{asset('').$baggage->image2}}">
                            @endif
                        </figure>
                        <div class="luggage-checkin-icon">
                            <b>{!! $baggage->icon1 !!}<h3>{{ $baggage->title6 }}</h3></b>

                            {!! $baggage->content8 !!}

                            <a href="">Add Check-in Bags</a>
                        </div>
                    </div>

                </div>


                <div class="luggage-checkin-row">

                    <div class="luggage-checkin-title">
                        <h2>{{ $baggage->title5 }}</h2>
                        {!! $baggage->content6 !!}

                    </div>

                    {!! $baggage->content7 !!}

                    <div class="luggage-checkin-icon-column">
                        <figure>
                            @if(strpos($baggage->image3, "baggage/") !== false)
                                <img src="{{asset('').'storage/'.$baggage->image3}}">
                            @else
                                <img src="{{asset('').$baggage->image3}}">
                            @endif
                        </figure>
                        <div class="luggage-checkin-icon">
                            <b> {!! $baggage->icon2 !!} <h3>{{ $baggage->title7 }}</h3></b>
                            {!! $baggage->content9 !!}

                            <a href="">Add Check-in Bags</a>
                        </div>
                    </div>

                </div>

                <div class="luggage-checkin-row">
                    <h3>Proibitted Items</h3>
                    <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase</p>
                    <ul>
                        <div class="buggage-prohibitted-title"><i class="fi fi-rr-info"></i><h4>Your luggage must not
                                contain any of the following</h4></div>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                        <li><i class="fi fi-rs-gun-squirt"></i><h5>Firearms</h5></li>
                    </ul>
                </div>
            </div>

        </div>


    </section><!-- #section -->

@endsection






























