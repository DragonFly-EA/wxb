@extends('layouts.main')
@section('content')

    <section>

            <div class="awards-page">

                <div class="single-fleet-banner">
                    <div class="clouds"></div>
                    <div class="container-rigid">
                        <div class="single-fleet-banner-figure" data-aos="fade-left">
                            <figure>
                                <img src="images/fleet1.png" loading="lazy">
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
                                <figure><img src="images/skytrax-award.png"></figure>
                                <p>We’re proud to have been awarded Environmental Airline of the Year for 2022 and 2023 in the Airline Excellence Awards.</p>
                            </a></li>

                            <li data-aos="zoom-in"><a href="">
                                <figure><img src="images/skytrax-award.png"></figure>
                                <p>We’re proud to have been awarded Environmental Airline of the Year for 2022 and 2023 in the Airline Excellence Awards.</p>
                            </a></li>
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
                                                        <img src="{{asset('').'storage/'.$award->icon}}">
                                                    @else
                                                        <img src="{{asset('').$award->icon}}">
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
                                                <img src="{{asset('').'storage/'.$award->banner}}">
                                            @else
                                                <img src="{{asset('').$award->banner}}">
                                            @endif
                                        </figure>
                                    </div>
                                </li>
                            @endforeach

{{--                            <li>--}}
{{--                                <div class="award-image">--}}
{{--                                    <div class="rotated-triangle">--}}
{{--                                        <div class="triangle triangle-3">--}}
{{--                                            <figure><img src="images/skytrax-award.png" data-aos="fade-right"></figure>--}}
{{--                                        </div>--}}

{{--                                        <div class="awards-rotate-details">--}}
{{--                                            <h3 data-aos="fade-right">World's Best Business Class Lounge</h3>--}}
{{--                                            <a href="" data-aos="fade-right">Explore our Lounge</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="award-image-caption">--}}
{{--                                    <figure><img src="images/about-us-banner.jpg"></figure>--}}

{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="award-image">--}}
{{--                                    <div class="rotated-triangle">--}}
{{--                                        <div class="triangle triangle-3">--}}
{{--                                            <figure><img src="images/skytrax-award.png" data-aos="fade-right"></figure>--}}
{{--                                        </div>--}}

{{--                                        <div class="awards-rotate-details">--}}
{{--                                            <h3 data-aos="fade-right">World's Best Business Class Lounge</h3>--}}
{{--                                            <a href="" data-aos="fade-right">Explore our Lounge</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="award-image-caption">--}}
{{--                                    <figure><img src="images/about-us-banner.jpg"></figure>--}}

{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>

            </div>



        </section><!-- #section -->

@endsection






























