@extends('layouts.main')
@section('content')
    <section>
        <div class="special-assistance-page">
            <div class="single-fleet-banner">
                <div class="container-rigid">
                    <div class="single-fleet-banner-figure">
                        <figure data-aos="fade-left">
                            @if(strpos($special->banner, "special/") !== false)
                                <img src="{{asset('').'storage/'.$special->banner}}">
                            @else
                                <img src="{{asset('').$special->banner}}">
                            @endif
                        </figure>
                    </div>

                    <div class="single-fleet-banner-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">{{$special->title_1}}</h1>
                                {!! $special->short_description !!}
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
                        {!! $special->content_1 !!}
                    </div>

                    <div class="special-assistance-list">

                        <div class="special-assistance-list-icon">
                            <figure data-aos="fade-right">
                                @if(strpos($special->icon, "special/") !== false)
                                    <img src="{{asset('').'storage/'.$special->icon}}">
                                @else
                                    <img src="{{asset('').$special->icon}}">
                                @endif
                            </figure>
                        </div>
                        {!! $special->content_2 !!}
                        {{--                            <ul>--}}
                        {{--                                <li data-aos="fade-left">--}}
                        {{--                                    <b><i class="fi fi-rs-check-circle"></i></b>--}}
                        {{--                                    <div class="special-assistance-list-details">--}}
                        {{--                                        <h3>Mobility assistance</h3>--}}
                        {{--                                        <p>If you have a vision or hearing impairment, we can provide you with special assistance to help you navigate the airport and board your flight. Our staff is trained in sign language and other communication methods to help you communicate with us and other passengers.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li data-aos="fade-left">--}}
                        {{--                                    <b><i class="fi fi-rs-check-circle"></i></b>--}}
                        {{--                                    <div class="special-assistance-list-details">--}}
                        {{--                                        <h3>Mobility assistance</h3>--}}
                        {{--                                        <p>If you have a vision or hearing impairment, we can provide you with special assistance to help you navigate the airport and board your flight. Our staff is trained in sign language and other communication methods to help you communicate with us and other passengers.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li data-aos="fade-left">--}}
                        {{--                                    <b><i class="fi fi-rs-check-circle"></i></b>--}}
                        {{--                                    <div class="special-assistance-list-details">--}}
                        {{--                                        <h3>Mobility assistance</h3>--}}
                        {{--                                        <p>If you have a vision or hearing impairment, we can provide you with special assistance to help you navigate the airport and board your flight. Our staff is trained in sign language and other communication methods to help you communicate with us and other passengers.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li data-aos="fade-left">--}}
                        {{--                                    <b><i class="fi fi-rs-check-circle"></i></b>--}}
                        {{--                                    <div class="special-assistance-list-details">--}}
                        {{--                                        <h3>Mobility assistance</h3>--}}
                        {{--                                        <p>If you have a vision or hearing impairment, we can provide you with special assistance to help you navigate the airport and board your flight. Our staff is trained in sign language and other communication methods to help you communicate with us and other passengers.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <b><i class="fi fi-rs-check-circle"></i></b>--}}
                        {{--                                    <div class="special-assistance-list-details">--}}
                        {{--                                        <h3>Mobility assistance</h3>--}}
                        {{--                                        <p>If you have a vision or hearing impairment, we can provide you with special assistance to help you navigate the airport and board your flight. Our staff is trained in sign language and other communication methods to help you communicate with us and other passengers.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li data-aos="fade-left">--}}
                        {{--                                    <b><i class="fi fi-rs-check-circle"></i></b>--}}
                        {{--                                    <div class="special-assistance-list-details">--}}
                        {{--                                        <h3>Mobility assistance</h3>--}}
                        {{--                                        <p>If you have a vision or hearing impairment, we can provide you with special assistance to help you navigate the airport and board your flight. Our staff is trained in sign language and other communication methods to help you communicate with us and other passengers.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}

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





























