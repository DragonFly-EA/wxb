@extends('layouts.main')
@section('content')
    <section>
        <div class="awards-page">
            <div class="single-fleet-banner">
                <div class="clouds"></div>
                <div class="container-rigid">
                    <div class="single-fleet-banner-figure" data-aos="fade-left">
                        <figure>
                            <img src="{{asset('images/fleet1.png')}}" alt="Rwandair Awards" loading="lazy">
                        </figure>
                    </div>
                    <div class="single-fleet-banner-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">One Airbus A330 – 300</h1>
                                <p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="awards-navigation">
                    <ol>
                        <li data-aos="zoom-in"><a href="">
                                <figure><img src="{{asset('images/skytrax-award.png')}}" alt="Skytrax Award"></figure>
                                <p>We’re proud to have been awarded Environmental Airline of the Year for 2022 and 2023
                                    in the Airline Excellence Awards.</p>
                            </a></li>

                        <li data-aos="zoom-in"><a href="">
                                <figure><img src="{{asset('images/skytrax-award.png')}}" alt="Skytrax Award"></figure>
                                <p>We’re proud to have been awarded Environmental Airline of the Year for 2022 and 2023
                                    in the Airline Excellence Awards.</p>
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="awards-list">
                    <ul>
                        @foreach($awards as $award)
                            <li>
                                <div class="award-image">
                                    <div class="rotated-triangle">
                                        <div class="triangle triangle-3">
                                            <figure>
                                                @if(strpos($award->icon, "awards/") !== false)
                                                    <img src="{{asset('').'storage/'.$award->icon}}" alt="{{$award->title}}">
                                                @else
                                                    <img src="{{asset('').$award->icon}}" alt="{{$award->title}}">
                                                @endif
                                            </figure>
                                        </div>
                                        <div class="awards-rotate-details">
                                            <h3 data-aos="fade-right">{{$award->title}}</h3>
                                            <a href="" data-aos="fade-right">{{$award->description}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-image-caption">
                                    <figure>
                                        @if(strpos($award->banner, "awards/") !== false)
                                            <img src="{{asset('').'storage/'.$award->banner}}" alt="{{$award->title}}">
                                        @else
                                            <img src="{{asset('').$award->banner}}" alt="{{$award->title}}">
                                        @endif
                                    </figure>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- #section -->
@endsection






























