@extends('layouts.main')
@section('content')
    <section>
        <div class="medical-information-page">
            <div class="single-fleet-banner">
                <div class="container-rigid">
                    <div class="single-fleet-banner-figure">
                        <figure data-aos="fade-left">
                            @if(strpos($medical->banner, "medical/") !== false)
                                <img src="{{asset('').'storage/'.$medical->banner}}">
                            @else
                                <img src="{{asset('').$medical->banner}}">
                            @endif
                        </figure>
                    </div>
                    <div class="single-fleet-banner-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">{{$medical->title_1}}</h1>
{{--                                <p data-aos="fade-right">We offer you the medical assistance to ensure that your flight--}}
{{--                                    is as comfortable and easy for you</p>--}}
                                {!! $medical->short_description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="special-assistance-wrapper">
                    <!--<div class="special-assistance-icon">-->
                    <!--    <figure><img src="images/special-assistance.svg"></figure>-->
                    <!--    <h1>Special Needs / Assistance</h1>-->
                    <!--    <p>We offer you the special assistance to ensure that your flight is as comfortable and easy for you</p>-->
                    <!--</div>-->
                    <div class="special-assistance-note">
                        <b data-aos="fade-up"><i class="fi fi-rr-info"></i></b>
                        {!! $medical->content_1 !!}
{{--                        <p data-aos="fade-up">Welcome onboard RwandAir, we are committed to ensuring that all of our--}}
{{--                            passengers have a safe, comfortable, and enjoyable flight. We understand that some--}}
{{--                            passengers may require special assistance due to disabilities, injuries, or other health--}}
{{--                            conditions, and we are here to help. If you or someone you are traveling with requires--}}
{{--                            special assistance, please let us know in advance so that we can make the necessary--}}
{{--                            arrangements while booking on our website, or contact our support team via--}}
{{--                            reservations@rwandair.com, or +250 788 177 000.</p>--}}
                    </div>
                    <div class="special-assistance-list">
                        <div class="special-assistance-list-icon">
                            <figure data-aos="fade-right">
                                <img src="images/special-assistance.svg">

                                @if(strpos($medical->icon, "medical/") !== false)
                                    <img src="{{asset('').'storage/'.$medical->icon}}">
                                @else
                                    <img src="{{asset('').$medical->icon}}">
                                @endif
                            </figure>
                        </div>
                        {!! $medical->content_2 !!}
{{--                        <ul>--}}
{{--                            <li data-aos="fade-left">--}}
{{--                                <b><i class="fi fi-rs-check-circle"></i></b>--}}
{{--                                <div class="special-assistance-list-details">--}}
{{--                                    <h3>Mobility assistance</h3>--}}
{{--                                    <p>If you have a vision or hearing impairment, we can provide you with special--}}
{{--                                        assistance to help you navigate the airport and board your flight. Our staff is--}}
{{--                                        trained in sign language and other communication methods to help you communicate--}}
{{--                                        with us and other passengers.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li data-aos="fade-left">--}}
{{--                                <b><i class="fi fi-rs-check-circle"></i></b>--}}
{{--                                <div class="special-assistance-list-details">--}}
{{--                                    <h3>Mobility assistance</h3>--}}
{{--                                    <p>If you have a vision or hearing impairment, we can provide you with special--}}
{{--                                        assistance to help you navigate the airport and board your flight. Our staff is--}}
{{--                                        trained in sign language and other communication methods to help you communicate--}}
{{--                                        with us and other passengers.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li data-aos="fade-left">--}}
{{--                                <b><i class="fi fi-rs-check-circle"></i></b>--}}
{{--                                <div class="special-assistance-list-details">--}}
{{--                                    <h3>Mobility assistance</h3>--}}
{{--                                    <p>If you have a vision or hearing impairment, we can provide you with special--}}
{{--                                        assistance to help you navigate the airport and board your flight. Our staff is--}}
{{--                                        trained in sign language and other communication methods to help you communicate--}}
{{--                                        with us and other passengers.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li data-aos="fade-left">--}}
{{--                                <b><i class="fi fi-rs-check-circle"></i></b>--}}
{{--                                <div class="special-assistance-list-details">--}}
{{--                                    <h3>Mobility assistance</h3>--}}
{{--                                    <p>If you have a vision or hearing impairment, we can provide you with special--}}
{{--                                        assistance to help you navigate the airport and board your flight. Our staff is--}}
{{--                                        trained in sign language and other communication methods to help you communicate--}}
{{--                                        with us and other passengers.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b><i class="fi fi-rs-check-circle"></i></b>--}}
{{--                                <div class="special-assistance-list-details">--}}
{{--                                    <h3>Mobility assistance</h3>--}}
{{--                                    <p>If you have a vision or hearing impairment, we can provide you with special--}}
{{--                                        assistance to help you navigate the airport and board your flight. Our staff is--}}
{{--                                        trained in sign language and other communication methods to help you communicate--}}
{{--                                        with us and other passengers.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li data-aos="fade-left">--}}
{{--                                <b><i class="fi fi-rs-check-circle"></i></b>--}}
{{--                                <div class="special-assistance-list-details">--}}
{{--                                    <h3>Mobility assistance</h3>--}}
{{--                                    <p>If you have a vision or hearing impairment, we can provide you with special--}}
{{--                                        assistance to help you navigate the airport and board your flight. Our staff is--}}
{{--                                        trained in sign language and other communication methods to help you communicate--}}
{{--                                        with us and other passengers.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                    <div class="request-special-assistance">
                        <div class="special-request-link">
                            <a href="" data-aos="fade-right">Request Special Assistance</a>
                        </div>
                        <div class="special-help-center">
                            <a href="" data-aos="fade-left">Visit the help center</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #section -->
@endsection































