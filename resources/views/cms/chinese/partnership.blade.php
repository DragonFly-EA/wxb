@extends('layouts.main')
@section('content')
    <section>
        <div class="partnership-page">
            <div class="no-banner-style">
                <figure>
                    @if(strpos($partnership->banner, "partnership/") !== false)
                        <img src="{{asset('').'storage/'.$partnership->banner}}">
                    @else
                        <img src="{{asset('').$partnership->banner}}">
                    @endif
                </figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">{{$partnership->title_1}}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container-rigid">
                    <div class="breadcrumbs-list">
                        <ul>
                            <li data-aos="fade-right"><a href="about-us.html"><p>About Us</p><i
                                        class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos="fade-right"><a href="fleet.html" class="active-crumb"><p>Partnership</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sustainability-icon-details">
                <div class="container-rigid">
                    <div class="sustainability-icon-details-table">

                        <div class="sustainability-details partnership-details">
                            <h1 data-aos="fade-left">{{$partnership->title_2}}</h1>
                            {!! $partnership->content !!}
                            {{--                            <p data-aos="fade-left">We’re thrilled to announce the expansion of our interline--}}
                            {{--                                partnership with Qatar Airways, connecting you to 160 destinations combined across the--}}
                            {{--                                globe including New York, Montreal and Paris through our hubs in Kigali and Doha.</p>--}}

                            {{--                            <p data-aos="fade-left">The first African airline to achieve the Diamond status in APEX--}}
                            {{--                                Health Safety, powered by Simplifying</p>--}}

                            {{--                            <p data-aos="fade-left">Take advantage of our flexible booking options in the strategic--}}
                            {{--                                partnership and fly with us in greater comfort and style.</p>--}}

                            {{--                            <p data-aos="fade-left">Experience the highest standards of safety with a 5-star COVID-19--}}
                            {{--                                Safety Rating from Skytrax for both Qatar Airways and their hub Hamad International--}}
                            {{--                                Airport, the “Best airport in the Middle East.”</p>--}}

                            {{--                            <p data-aos="fade-left">Customers of both airlines will benefit from convenient access to--}}
                            {{--                                more than 65 global codeshare destinations</p>--}}

                            {{--                            <p data-aos="fade-left">RwandAir’s new Kigali – Doha non-stop flights from December will--}}
                            {{--                                provide a seamless travel experience connecting Africa to the world</p>--}}

                            {{--                            <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam--}}
                            {{--                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi--}}
                            {{--                                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut--}}
                            {{--                                aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>--}}

                        </div>


                    </div>
                </div>
            </div>


            <div class="container-rigid">
                <div class="sustainability-policy">
                    <h3 data-aos="fade-left">Announcing our codeshare partnership with Qatar Airways</h3>

                    <ul>
                        <li data-aos="zoom-in">
                            <figure><img src="images/career-cabin.svg"></figure>
                            <div class="partnership-codeshare-details">
                                <h4>Extended Network</h4>
                                <p>Betwwen Africa and the World</p>
                            </div>

                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/career-admin.svg"></figure>
                            <div class="partnership-codeshare-details">
                                <h4>Seamless Connections</h4>
                                <p>Via Kigali International Airport</p>
                            </div>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/career-cockpit.svg"></figure>
                            <div class="partnership-codeshare-details">
                                <h4>Earn and spend miles</h4>
                                <p>With both airline</p>
                            </div>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/career-grad.svg"></figure>
                            <div class="partnership-codeshare-details">
                                <h4>Best Airline Staff in Africa</h4>
                                <p>And Africas 2nd best Regional Airline</p>
                            </div>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/career-cabin.svg"></figure>
                            <div class="partnership-codeshare-details">
                                <h4>Offering guaranteed flexibility</h4>
                                <p>With our partner, Qatar Airways</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


    </section><!-- #section -->

@endsection






























