@extends('layouts.main')
@section('content')

    <section>

            <div class="checkin-online-page">
                <div class="no-banner-style">
                    <figure><img src="images/Doha.jpg"></figure>
                    <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Airports & Lounges</h1>
                            </div>

                        </div>

                    </div>
                    </div>
                </div>

                <div class="container-rigid">
                    <div class="checkin-online-columns">

                        <div class="checkin-online-column">
                            <div class="checkin-first-title">
                                <figure><i class="fi fi-tr-mobile-notch"></i></figure>
                                <h3>Check-in on your mobile or tablet</h3>
                            </div>


                            <div class="checkin-main-pic">
                                <figure><img src="images/about-us-banner.jpg"></figure>
                            </div>

                            <div class="checkin-lists">
                                <ul>
                                    <li>
                                        <span><i>1</i></span>
                                        <b>
                                            <h5>On your mobile or tablet...</h5>
                                            <p>Enter Rwanair.com or download the App (iOS or Android).</p>
                                            <a href="">Learn More</a>
                                        </b>

                                    </li>
                                </ul>
                                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>
                            </div>

                        </div>

                        <div class="checkin-online-column">
                            <div class="checkin-first-title">
                                <figure><i class="fi fi-tr-mobile-notch"></i></figure>
                                <h3>Check-in on your mobile or tablet</h3>
                            </div>


                            <div class="checkin-main-pic">
                                <figure><img src="images/about-us-banner.jpg"></figure>
                            </div>

                            <div class="checkin-lists">
                                <ul>
                                    <li>
                                        <span><i>1</i></span>
                                        <b>
                                            <h5>On your mobile or tablet...</h5>
                                            <p>Enter Rwanair.com or download the App (iOS or Android).</p>
                                            <a href="">Learn More</a>
                                        </b>
                                    </li>
                                </ul>
                                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>
                            </div>

                        </div>

                        <div class="checkin-online-column">
                            <div class="checkin-first-title">
                                <figure><i class="fi fi-tr-mobile-notch"></i></figure>
                                <h3>Check-in on your mobile or tablet</h3>
                            </div>


                            <div class="checkin-main-pic">
                                <figure><img src="images/about-us-banner.jpg"></figure>
                            </div>

                            <div class="checkin-lists">
                                <ul>
                                    <li>
                                        <span><i>1</i></span>
                                        <b>
                                            <h5>On your mobile or tablet...</h5>
                                            <p>Enter Rwanair.com or download the App (iOS or Android).</p>
                                            <a href="">Learn More</a>
                                        </b>

                                    </li>
                                </ul>
                                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="cities-pattern" data-aos="zoom-in">
            <figure><img src="images/cities-pattern-lightblue.svg"></figure>
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
                                <figure><img src="images/offers-london.jpg"></figure>
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
                                                <li><a href="book.html">Book Now</a></li>
                                                <li><a href="destination.html">Explore</a></li>
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



        </section><!-- #section -->


@endsection






























