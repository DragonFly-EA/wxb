@extends('layouts.main')
@section('content')

    <section>

        <div class="travel-insurance-page">

            <div class="no-banner-style">
                <figure>
                    @if(strpos($travel->banner, "travel_insurance/") !== false)
                        <img src="{{asset('').'storage/'.$travel->banner}}">
                    @else
                        <img src="{{asset('').$travel->banner}}">
                    @endif
                </figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">{{$travel->title_1}}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="container-rigid">
                <div class="policies-wrapper">
                    <!--<div class="policies-icon"><figure><i class="fi fi-rr-user-lock"></i></figure></div>-->
                    <div class="policies-content">

                        <h3>{{$travel->title_2}}</h3>
                        {!! $travel->content !!}

{{--                        <p>We understand that unexpected events can occur while traveling, which is why we offer--}}
{{--                            comprehensive travel insurance services to provide you with peace of mind during your--}}
{{--                            journey.</p>--}}

{{--                        <p>While travel insurance is not compulsory, we highly recommend considering it as an essential--}}
{{--                            part of your travel planning. With our Insurance Services, you can travel with confidence,--}}
{{--                            knowing that you are protected against a range of unforeseen circumstances.</p>--}}

{{--                        <a href="">Purchase Travel Insurance</a>--}}

{{--                        <div class="application">--}}

{{--                            <div class="faqs-wrapper">--}}

{{--                                <ul class="faqs">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="question">Africa</a>--}}
{{--                                        <div class="desc">--}}
{{--                                            <p>All our A350 Aircrafts have Wi-Fi and most of our B777 and B787 are--}}
{{--                                                currently being equipped.</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="#" class="question">Asia</a>--}}
{{--                                        <div class="desc">--}}
{{--                                            <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an--}}
{{--                                                announcement regarding the availability and type of Wi-Fi service we--}}
{{--                                                have at the beginning of the flight.</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="question">Europe</a>--}}
{{--                                        <div class="desc">--}}

{{--                                            <p>If you can’t access the service on-board due to technical problem and--}}
{{--                                                payed for it, you will be refunded.</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="#" class="question">America</a>--}}
{{--                                        <div class="desc">--}}
{{--                                            <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an--}}
{{--                                                announcement regarding the availability and type of Wi-Fi service we--}}
{{--                                                have at the beginning of the flight.</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="#" class="question">Middle East</a>--}}
{{--                                        <div class="desc">--}}
{{--                                            <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an--}}
{{--                                                announcement regarding the availability and type of Wi-Fi service we--}}
{{--                                                have at the beginning of the flight.</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}

{{--                        </div>--}}


                    </div>
                </div>

            </div>

            <div class="wifi-tabs-wrapper">
                <div class="container-rigid">
                    <!--Horizontal Tab-->
                    <div id="horizontalTab">

                        <ul class="resp-tabs-list">
                            <li>
                                <figure><i class="fi fi-sr-plane-departure"></i></figure>
                                <h3>Comprehensive Coverage</h3>
                            </li>
                            <li>
                                <figure><i class="fi fi-sr-plane-departure"></i></figure>
                                <h3>Convenient Purchase Options</h3>
                            </li>

                            <li>
                                <figure><i class="fi fi-sr-time-check"></i></figure>
                                <h3>Terms and Conditions</h3>
                            </li>

                        </ul>

                        <div class="resp-tabs-container">
                            <div class="comprehensive-coverage">
                                <h4>Comprehensive Coverage</h4>
                                <p>Our travel insurance covers a wide range of items, ensuring that you are insured
                                    throughout your journey. The items we cover include, but are not limited to:</p>

                                <p>*Only available to residents of Dubai & Rwanda. More destinations will be added.</p>

                                <ul>
                                    <li>Baggage loss or delay</li>
                                    <li>Flight cancellation</li>
                                    <li>Emergency medical expenses</li>
                                    <li>Flight delay or missed connection</li>
                                    <li>Personal liability</li>
                                    <li>Emergency medical evacuation</li>

                                </ul>
                            </div>

                            <div class="convenient-purchase">
                                <h4>Convenient Purchase Options</h4>
                                <p>Enjoy a hassle-free experience purchasing RwandAir travel insurance. You have two
                                    options available to you:</p>

                                <ul>
                                    <li><a href="book.html">During Booking :</a> When making a new booking on our
                                        website, you will have the opportunity to add travel insurance during the
                                        booking process. Select the insurance option that best suits your needs, and it
                                        will be seamlessly included in your booking.
                                    </li>
                                    <li><a href="book.html">Manage Booking :</a> If you have already booked your flight
                                        with us, you can easily add travel insurance by accessing your booking through
                                        our website. Simply log in to your booking, select your flight, and choose the
                                        travel insurance option during the Manage Booking process.
                                    </li>
                                </ul>

                            </div>


                            <div class="travel-insurance-terms">
                                <h4>Terms and Conditions of RwandAir Travel Insurance</h4>
                                <p>While our travel insurance is designed to provide comprehensive coverage, it's
                                    important to understand the terms and conditions associated with the policy.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>


    </section><!-- #section -->
@endsection


































