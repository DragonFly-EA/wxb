@extends('layouts.main')
@section('content')

    <section>

            <div class="checkin-online-page">
                <div class="no-banner-style">
                    <figure>
{{--                        <img src="images/imigongo-new.jpg">--}}

                        @if(strpos($checkinOnline->image1, "checkinOnline/") !== false)
                            <img src="{{asset('').'storage/'.$checkinOnline->image1}}">
                        @else
                            <img src="{{asset('').$checkinOnline->image1}}">
                        @endif


                    </figure>
                    <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">{{$checkinOnline->header}}</h1>
                            </div>

                        </div>

                    </div>
                    </div>
                </div>

                <div class="container-rigid">
                    <div class="checkin-online-columns">

                        <div class="checkin-online-column">
                            <div class="checkin-first-title">
                                <figure><i class="fi fi-sr-mobile-notch"></i></figure>
                                <h3>{{$checkinOnline->header1}}</h3>
                            </div>

                            <div class="checkin-second-title">
                                <figure><i class="fi fi-sr-mobile-notch"></i></figure>
                                <h4>{{$checkinOnline->title1}}.</h4>
                            </div>

                            <div class="checkin-main-pic">
                                <figure><img src="images/about-us-banner.jpg"></figure>
                            </div>

                            {!! $checkinOnline->content1 !!}

{{--                            <div class="checkin-lists">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <span><i>1</i></span>--}}
{{--                                        <b>--}}
{{--                                            <h5>On your mobile or tablet...</h5>--}}
{{--                                            <p>Enter Rwanair.com or download the App (iOS or Android).</p>--}}
{{--                                        </b>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <span><i>2</i></span>--}}
{{--                                        <b>--}}
{{--                                            <h5>Access your booking</h5>--}}
{{--                                            <p>Log in, or enter your booking number and the surname of one of the passengers in the Check-in section.</p>--}}
{{--                                        </b>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <span><i>3</i></span>--}}
{{--                                        <b>--}}
{{--                                            <h5>Get your boarding passes</h5>--}}
{{--                                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device..</p>--}}
{{--                                        </b>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>--}}
{{--                            </div>--}}

                            {!! $checkinOnline->content2 !!}

{{--                            <div class="checkin-third-title">--}}
{{--                                <figure><i class="fi fi-sr-mobile-notch"></i></figure>--}}
{{--                                <p>You will also find them in the Boarding cards section on the Volotea App.</p>--}}
{{--                            </div>--}}

                        </div>

                        <div class="checkin-online-column">
                            <div class="checkin-first-title">
                                <figure><i class="fi fi-sr-mobile-notch"></i></figure>
                                <h3>{{$checkinOnline->header1}}</h3>
                            </div>

                            <div class="checkin-second-title">
                                <figure><i class="fi fi-sr-mobile-notch"></i></figure>
                                <h4>{{$checkinOnline->title1}}.</h4>
                            </div>

                            <div class="checkin-main-pic">
                                <figure>

                                    <img src="images/about-us-banner.jpg">


                                    @if(strpos($checkinOnline->banner1, "checkinOnline/") !== false)
                                        <img src="{{asset('').'storage/'.$checkinOnline->banner1}}">
                                    @else
                                        <img src="{{asset('').$checkinOnline->banner1}}">
                                    @endif






                                </figure>
                            </div>

                            {!! $checkinOnline->content1 !!}

{{--                            <div class="checkin-lists">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <span><i>1</i></span>--}}
{{--                                        <b>--}}
{{--                                            <h5>On your mobile or tablet...</h5>--}}
{{--                                            <p>Enter Rwanair.com or download the App (iOS or Android).</p>--}}
{{--                                        </b>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <span><i>2</i></span>--}}
{{--                                        <b>--}}
{{--                                            <h5>Access your booking</h5>--}}
{{--                                            <p>Log in, or enter your booking number and the surname of one of the passengers in the Check-in section.</p>--}}
{{--                                        </b>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <span><i>3</i></span>--}}
{{--                                        <b>--}}
{{--                                            <h5>Get your boarding passes</h5>--}}
{{--                                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device..</p>--}}
{{--                                        </b>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>--}}
{{--                            </div>--}}

                            {!! $checkinOnline->content2 !!}

{{--                            <div class="checkin-third-title">--}}
{{--                                <figure><i class="fi fi-sr-mobile-notch"></i></figure>--}}
{{--                                <p>You will also find them in the Boarding cards section on the Volotea App.</p>--}}
{{--                            </div>--}}

                        </div>

                    </div>


                    {!! $checkinOnline->content3 !!}


{{--                    <div class="special-checkin-wrapper">--}}

{{--                        <div class="special-title">--}}
{{--                            <figure><i class="fi fi-sr-mobile-notch"></i></figure>--}}
{{--                            <b>--}}
{{--                                <h3>Special check-in</h3>--}}
{{--                                <p>Don't worry, under these circumstances printing your boarding pass at the airport won't cost you anything.</p>--}}
{{--                            </b>--}}

{{--                        </div>--}}

{{--                        <div class="special-checkin-list">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <figure><i class="fi fi-sr-mobile-notch"></i></figure>--}}
{{--                                    <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device..</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <figure><i class="fi fi-sr-mobile-notch"></i></figure>--}}
{{--                                    <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device..</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <figure><i class="fi fi-sr-mobile-notch"></i></figure>--}}
{{--                                    <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device..</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="special-last-paragraph">--}}
{{--                            <p>We recommend that you arrive at the airport at least 2 and a half hours before the flight, so that you can manage your check-in with time and tranquility.</p>--}}
{{--                        </div>--}}


{{--                    </div>--}}

                    <div class="request-special-assistance">
                            <div class="special-request-link">
                                <a href="" data-aos="fade-right">Get your boarding pass</a>
                            </div>
                            <div class="special-help-center">
                                <a href="" data-aos="fade-left">Check price table</a>
                            </div>
                        </div>
                </div>
            </div>



        </section><!-- #section -->


@endsection






























