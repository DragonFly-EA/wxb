@extends('layouts.main')
@section('content')
    <section>
        <div class="checkin-online-page">
            <div class="no-banner-style">
                <figure>
                    @if(strpos($checkinOnline->image1, "checkinOnline/") !== false)
                        <img src="{{asset('').'storage/'.$checkinOnline->image1}}" alt="{{$checkinOnline->header1}}">
                    @else
                        <img src="{{asset('').$checkinOnline->image1}}" alt="{{$checkinOnline->header1}}">
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
                            <figure><img src="{{asset('images/about-us-banner.jpg')}}" alt="banner"></figure>
                        </div>

                        {!! $checkinOnline->content1 !!}
                        {!! $checkinOnline->content2 !!}
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
                                @if(strpos($checkinOnline->banner1, "checkinOnline/") !== false)
                                    <img src="{{asset('').'storage/'.$checkinOnline->banner1}}" alt="{{$checkinOnline->header1}}">
                                @else
                                    <img src="{{asset('').$checkinOnline->banner1}}" alt="{{$checkinOnline->header1}}">
                                @endif
                            </figure>
                        </div>
                        {!! $checkinOnline->content1 !!}
                    </div>
                </div>
                {!! $checkinOnline->content3 !!}
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






























