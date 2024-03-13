<@extends('layouts.main')
@section('content')
    <section>
        <div class="newsletter-page">
            <div class="no-banner-style">
                <figure><img src="{{asset('images/Cotonou.jpg')}}" alt="banner"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Be among the first<br>to receive our offers</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="newsletter-container">
                    <div class="home-plan-trip-wrapper">
                        <h3 data-aos="zoom-in">Plan your trip</h3>
                        <ul>
                            <li data-aos="zoom-in">
                                <a href="#">
                                    <figure><img src="{{asset('images/plan-explore.svg')}}" alt="explore"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Explore Destinations</p>
                                        <i class="fi fi-ts-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="zoom-in">
                                <a href="#">
                                    <figure><img src="{{asset('images/plan-requirements.svg')}}" alt="requirements"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Travel Requirements</p>
                                        <i class="fi fi-ts-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="zoom-in">
                                <a href="#">
                                    <figure><img src="{{asset('images/plan-care.svg')}}" alt="plan"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Special Care</p>
                                        <i class="fi fi-ts-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="zoom-in">
                                <a href="#">
                                    <figure><img src="{{asset('images/plan-insurance.svg')}}" alt="insurance"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Travel Insurance</p>
                                        <i class="fi fi-ts-arrow-circle-right"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cities-pattern" data-aos="zoom-in">
                <figure><img src="{{asset('images/cities-pattern-lightblue.svg')}}" alt="pattern"></figure>
            </div>
            <div class="newsletter-pop">
                <div class="newsletter">
                    <div class="align-newsletter">
                        <div class="section-title text-center">
                            <h2>Our Newsletter</h2>
                            <p>We bring the right people together to challenge established thinking and drive
                                transformation.
                                We will show the way to successive.</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Enter your email..." required>
                                <button type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dont-miss-offer-wrapper">
                <div class="container-rigid">
                    <div class="dont-miss-dropselect" data-aos="fade-right">
                        <h3>Don't miss our offers</h3>

                        <div class="cont_select_center">
                            <h5>From</h5>
                            <!-- Custom select structure -->
                            <div class="select_mate" data-mate-select="active">

                                <select name="" onchange="" onclick="return false;" id="">
                                    <option value="">Nairobi NBO</option>
                                    <option value="1">Kigali KGL</option>
                                    <option value="2">Nairobi NBO</option>
                                    <option value="3">Kigali KGL</option>
                                </select>
                                <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                <span onclick="open_select(this)" class="icon_select_mate">
                                    <i class="fi fi-sr-pencil"></i>
                                </span>
                                <div class="cont_list_select_mate">
                                    <ul class="cont_select_int"></ul>
                                </div>
                            </div>
                            <!-- Custom select structure -->


                        </div> <!-- End div center   -->

                    </div>

                    <div class="dont-miss-offer-columns">

                        <div class="dont-miss-offer-columns-style dont-miss-offer-column1">
                            <ul>
                                <li data-aos="fade-right">
                                    <figure><img src="{{asset('images/offers-london.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>London</h4>
                                                    <p>02 Nov 2023 - 07 Nov 2023</p>
                                                </b>
                                                <b>
                                                    <p>Economy From</p>
                                                    <h4>USD 297</h4>
                                                </b>
                                            </div>
                                            <div class="dont-miss-offer-details-invisible">
                                                <ul>
                                                    <li><a href="#">Explore</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dont-miss-offer-columns-style dont-miss-offer-column2">
                            <ul>
                                <li data-aos="fade-left">
                                    <figure><img src="images/offers-abuja.jpg"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Abuja</h4>
                                                    <p>02 Nov 2023 - 07 Nov 2023</p>
                                                </b>
                                                <b>
                                                    <p>Economy From</p>
                                                    <h4>USD 297</h4>
                                                </b>
                                            </div>
                                            <div class="dont-miss-offer-details-invisible">
                                                <ul>
                                                    <li><a href="book.html">Book Now</a></li>
                                                    <li><a href="destination.html">Explore</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li data-aos="fade-left">
                                    <figure><img src="images/offers-accra.jpg"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Accra</h4>
                                                    <p>02 Nov 2023 - 07 Nov 2023</p>
                                                </b>
                                                <b>
                                                    <p>Economy From</p>
                                                    <h4>USD 297</h4>
                                                </b>
                                            </div>
                                            <div class="dont-miss-offer-details-invisible">
                                                <ul>
                                                    <li><a href="book.html">Book Now</a></li>
                                                    <li><a href="destination.html">Explore</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li data-aos="fade-left">
                                    <figure><img src="images/offers-addisababa.jpg"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Addis Ababa</h4>
                                                    <p>02 Nov 2023 - 07 Nov 2023</p>
                                                </b>
                                                <b>
                                                    <p>Economy From</p>
                                                    <h4>USD 297</h4>
                                                </b>
                                            </div>
                                            <div class="dont-miss-offer-details-invisible">
                                                <ul>
                                                    <li><a href="book.html">Book Now</a></li>
                                                    <li><a href="destination.html">Explore</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li data-aos="fade-left">
                                    <figure><img src="images/offers-nairobi.jpg"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Nairobi</h4>
                                                    <p>02 Nov 2023 - 07 Nov 2023</p>
                                                </b>
                                                <b>
                                                    <p>Economy From</p>
                                                    <h4>USD 297</h4>
                                                </b>
                                            </div>
                                            <div class="dont-miss-offer-details-invisible">
                                                <ul>
                                                    <li><a href="book.html">Book Now</a></li>
                                                    <li><a href="destination.html">Explore</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="view-more-offers" data-aos="fade-right"><a href="">View More Offers</a></div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #div -->

@endsection































