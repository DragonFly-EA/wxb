@extends('layouts.main')
@section('content')
    <section>
        <div class="single-fleet-page">
            <div class="single-fleet-banner">
                <div class="container-rigid">
                    <div class="single-fleet-banner-figure">
                        <figure data-aos="fade-left" id="page_image">
                            <img src="{{asset('').$fleet->banner}}" loading="lazy">
                        </figure>
                    </div>
                    <div class="single-fleet-banner-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-right" id="page_title" class="aos-init aos-animate">{{$fleet->title}}</h1>
                                <p data-aos="fade-right" class="aos-init aos-animate">{!! $fleet->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-rigid">
            <div class="single-fleet-seats">
                <h2 data-aos="fade-right">Our Seats</h2>
                <ul>

                    <li data-aos="zoom-in">
                        <figure><img src="{{asset('images/seat-first.jpg')}}"></figure>
                        <div class="single-fleet-seat-details">
                            <h3>First Class</h3>
                            <p>Surpass customer expectations of services by continuously improving and innovating
                                products as well as service delivery.</p>
                            <a href="">Learn More</a>
                        </div>
                    </li>

                    <li data-aos="zoom-in">
                        <figure><img src="{{asset('images/seat-business.jpg')}}"></figure>
                        <div class="single-fleet-seat-details">
                            <h3>Business Class</h3>
                            <p>Surpass customer expectations of services by continuously improving and innovating
                                products as well as service delivery.</p>
                            <a href="">Learn More</a>
                        </div>
                    </li>

                    <li data-aos="zoom-in">
                        <figure><img src="{{asset('images/seat-premium.jpg')}}"></figure>
                        <div class="single-fleet-seat-details">
                            <h3>Premium Economy</h3>
                            <p>Surpass customer expectations of services by continuously improving and innovating
                                products as well as service delivery.</p>
                            <a href="">Learn More</a>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="single-fleet-infotainment">
                <ul>
                    <li data-aos="fade-right">
                        <figure><img src="{{asset('images/Cabin_ent.jpg')}}"></figure>
                        <div class="single-fleet-infotainment-details">
                            <h3>Entertainment at your fingertips</h3>
                            <p>Hundreds of hours of on-demand movies, TV and music, as well as live sports and news.
                                Catch the latest blockbuster, settle in with your favourite TV shows or explore our
                                diverse variety of music and gaming options.</p>
                            <a href="">Learn More</a>
                        </div>
                    </li>

                    <li data-aos="fade-left">
                        <figure><img src="{{asset('images/Cabin_food.jpg')}}"></figure>
                        <div class="single-fleet-infotainment-details">
                            <h3>Freshly prepared meals</h3>
                            <p>Enjoy complimentary dining on every flight, with full-of-flavour dishes and your
                                favourite drinks. Feel good knowing that we're reducing single-use plastics and
                                using more local ingredients in our inflight meals.</p>
                            <a href="">Download the RwandAir menu</a>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="single-fleet-faqs">
                <h3>Related Sections</h3>
                <div class="faqs-wrapper">

                    <ul class="faqs">
                        <li data-aos="fade-up">
                            <a href="#" class="question">Africa</a>
                            <div class="desc">
                                <p>All our A350 Aircrafts have Wi-Fi and most of our B777 and B787 are currently
                                    being equipped.</p>
                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <a href="#" class="question">Asia</a>
                            <div class="desc">
                                <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an announcement
                                    regarding the availability and type of Wi-Fi service we have at the beginning of
                                    the flight.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#" class="question">Europe</a>
                            <div class="desc">

                                <p>If you can’t access the service on-board due to technical problem and payed for
                                    it, you will be refunded.</p>
                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <a href="#" class="question">America</a>
                            <div class="desc">
                                <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an announcement
                                    regarding the availability and type of Wi-Fi service we have at the beginning of
                                    the flight.</p>
                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <a href="#" class="question">Middle East</a>
                            <div class="desc">
                                <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an announcement
                                    regarding the availability and type of Wi-Fi service we have at the beginning of
                                    the flight.</p>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section><!-- #section -->

@endsection





























