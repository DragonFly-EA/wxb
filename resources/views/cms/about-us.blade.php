@extends('layouts.main')
@section('content')
    <section>
        <div class="about-us-page">
            <div class="about-us-banner" data-aos="fade-up">
                <div class="container-fluid">
                    <figure>
                        @if(strpos($about->banner, "about/") !== false)
                            <img src="{{asset('').'storage/'.$about->banner}}" alt="{{$about->title}}">
                        @else
                            <img src="{{asset('').$about->banner}}" alt="{{$about->title}}">
                        @endif
                    </figure>
                </div>
            </div>

            <div class="about-rwandair-wrapper">
                <div class="container-rigid">
                    <div class="about-rwandair-columns">
                        <div class="about-rwandair-column about-rwandair-column1">
                            <h3 data-aos="fade-right">{{$about->title}}</h3>
                            {!! $about->content !!}
                        </div>
                        <div class="about-rwandair-column about-rwandair-column2">
                            <div class="about-mission-vision" data-aos="fade-left">
                                <div class="mission-vision-title">
                                    <figure>
                                        <i class="fi fi-sr-flag"></i>
                                    </figure>
                                    <h4>Our Mission</h4>
                                </div>
                                <div class="mission-vision-details">
                                    <p>To provide unsurpassed, safe and reliable services in air transportation
                                        including strategically linking Rwanda with the outside world, while ensuring a
                                        fair return on investment.</p>
                                </div>
                            </div>
                            <div class="about-mission-vision" data-aos="fade-left">
                                <div class="mission-vision-title">
                                    <figure>
                                        <i class="fi fi-rr-low-vision"></i>
                                    </figure>
                                    <h4>Our Vision</h4>
                                </div>
                                <div class="mission-vision-details">
                                    <p>To be the airline of obvious choice in the markets we serve.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="about-accreditations-wrapper" data-aos="slide-up">
                <div class="container-rigid">
                    <div class="accreditations-details-image">
                        <!--<div class="clouds"></div>-->

                        <div class="accreditation-details-column">
                            <h3>{{$about->title_2}}</h3>
                            <div class="accreditation-details-row" data-aos="fade-right">
                                <figure>
                                    @if(strpos($about->icon_1, "about") !== false)
                                        <img src="{{asset('').'storage/'.$about->icon_1}}" alt="{{$about->title}}">
                                    @else
                                        <img src="{{asset('').$about->icon_1}}" alt="{{$about->title}}">
                                    @endif
                                </figure>
                                {!! $about->content_1 !!}
                            </div>
                            <div class="accreditation-details-row" data-aos="fade-right">
                                <figure>
                                    @if(strpos($about->icon_2, "about") !== false)
                                        <img src="{{asset('').'storage/'.$about->icon_2}}" alt="{{$about->title}}">
                                    @else
                                        <img src="{{asset('').$about->icon_2}}" alt="{{$about->title}}">
                                    @endif
                                </figure>
                                {!! $about->content_2 !!}
                            </div>
                        </div>
                        <div class="accreditation-image-column" data-aos="fade-left">
                            <figure>
                                @if(strpos($about->banner_2, "about") === true)
                                    <img src="{{asset('').'storage/'.$about->banner_2}}" alt="{{$about->title}}">
                                @else
                                    <img src="{{asset('').$about->banner_2}}" alt="{{$about->title}}">
                                @endif
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-values-wrapper" data-aos="slide-up">
                <div class="container-rigid">
                    <h3>Our Values</h3>
                    <ul>
                        @foreach($values as $value)
                            <li data-aos="zoom-in">
                                <div class="value-title">
                                    <figure>{!! $value->icon !!}</figure>
                                    <h4>{{$value->title}}</h4>
                                </div>
                                <div class="value-details">
                                    {!! $value->content !!}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
