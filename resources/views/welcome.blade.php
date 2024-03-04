@extends('layouts.site.main')
@section('content')
    <section>
        <div class="home-slider-form-wrapper">
            <div class="home-slider-wrapper" data-aos="">
                <ul class="bxslider">
                    <li>
                        <img src="{{asset('assets/site/images/slider_banner.jpg')}}"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h1 data-aos="">Enjoy More Convenience with <br> 6 weekly nonstop flights</h1>
                                    <p data-aos="">Starting 28 October</p>
                                    <a href="" data-aos="">Learn More</a>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            @include('includes.bookingform')
        </div>

        <div class="home-plan-trip-wrapper">
            <div class="container-rigid">
                <!--<h3 data-aos="">Plan your trip</h3>-->
                <ul>
                    <li data-aos="">
                        <a href="destination.html">
                            <figure><img src="{{asset('assets/site/images/book-hotels.png')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Book Hotels</p>
                                <i class="fi fi-sr-plus"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="">
                        <a href="travel-requirements.html">
                            <figure><img src="{{asset('assets/site/images/book-cars.png')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Book Cars</p>
                                <i class="fi fi-sr-plus"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="">
                        <a href="special-assistance.html">
                            <figure><img src="{{asset('assets/site/images/book-tours.png')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Book Tours</p>
                                <i class="fi fi-sr-plus"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="">
                        <a href="travel-insurance.html">
                            <figure><img src="{{asset("assets/site/images/upgrade.png")}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Upgrade</p>
                                <i class="fi fi-sr-plus"></i>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
        <div class="new-next-trip-wrapper">

            <div class="container-rigid">
                <h2 data-aos="">Discover your next trip</h2>
                <div class="sustainability-sponsors">
                    <ul>
                        <li data-aos="">
                            <figure><img src="{{asset('assets/site/images/sustainability-corporate.jpg')}}"></figure>
                            <div class="media-center-caption">
                                <h3>Entry Requirement</h3>

                                <p>The information below is dynamic and may change anytime on short notice. Therefore,
                                    we recommend...</p>

                                <a href=""><span>Travel Requirement</span><i class="fi fi-rr-angle-right"></i></a>
                            </div>

                        </li>

                        <li data-aos="">
                            <figure><img src="{{asset('assets/site/images/sustainability-sponsorship.jpg')}}"></figure>
                            <div class="media-center-caption">
                                <h3>Ticket Flexibility</h3>

                                <p>RwandAir flexible policies on rebooking, cancellations and refunds...</p>

                                <a href=""><span>Discover More</span><i class="fi fi-rr-angle-right"></i></a>
                            </div>
                        </li>

                        <li data-aos="">
                            <figure><img src="{{asset('assets/site/images/sustainability-tender.jpg')}}"></figure>
                            <div class="media-center-caption">
                                <h3>Deals and Offers</h3>

                                <p>Make your Christmas plans with us and save up to 30% with a promo code.Therefore, we
                                    recommend...</p>

                                <a href=""><span>Check it out</span><i class="fi fi-rr-angle-right"></i></a>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


        </div>

        <div class="dont-miss-offer-wrapper">
            <div class="container-rigid">
                <div class="dont-miss-dropselect" data-aos="">
                    <h3>Don't miss our offers...</h3>

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
                    <div class="dont-miss-offer-columns-style dont-miss-offer-column2">
                        <ul>
                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/London.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>London</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/Paris.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Paris</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/Abuja.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Abuja</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/Dubai.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Dubai</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/Accra.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Accra</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/Ethiopia.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Ethiopia</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure><img src="{{asset('assets/site/images/Nairobi.jpg')}}"></figure>
                                    <div class="dont-miss-offer-details">
                                        <div class="dont-miss-offer-details-hover">
                                            <div class="dont-miss-offer-details-visible">
                                                <b>
                                                    <h4>Nairobi</h4>
                                                    <p>Round Trip</p>
                                                </b>
                                                <b>
                                                    <!--<p>Economy From</p>-->
                                                    <h4>From USD 297</h4>
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
                                </a>
                            </li>

                            <li data-aos="">
                                <a href="">
                                    <figure style="opacity:0"><img src="{{asset('assets/site/images/Nairobi.jpg')}}">
                                    </figure>
                                    <div class="find-more-wrap">
                                        <h5>Business Class accommodations on extended flights</h5>
                                        <b>Enhanced, digital, sustainable, revamped dining.</b>
                                        <span>Find out more</span>
                                    </div>


                                </a>

                            </li>
                        </ul>
                    </div>

                    <div class="view-more-offers" data-aos=""><p>*Prices, including all taxes, fees and surcharges, may
                            vary and are intended to guide your selection.</p><a href="">View More Offers</a></div>
                </div>
            </div>

        </div>

        <div class="home-offers-slider home-dreammiles-slide">
            <ul class="">

                <li>
                    <img src="{{asset('assets/site/images/home-dreamiles.jpg')}}"/>
                    <div class="bx-caption">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h3 data-aos="">Experience a world of convenience <br> with DreamMiles benefits.</h3>
                                <br><br>
                                <a href="dreammiles.html" data-aos="">Explore More</a>

                            </div>
                        </div>
                    </div>

                </li>

            </ul>
        </div>

        <div class="discover-next-best">
            <div class="container-rigid">
                <div class="discover-next-best-row">
                    <div class="discover-next-best-col discover-next-best-col1">
                        <figure>
                            <div class="discover-next-book">
                                <h3>Best deal to Paris</h3>
                                <a href="">Book Now</a>
                            </div>
                        </figure>
                    </div>

                    <div class="discover-next-best-col discover-next-best-col2">
                        <ul>
                            <div id="output1"></div>
                            <div id="output2"></div>
{{--                            <li><a href=""><h4>Dar Es Salaam to Kigali</h4><span><p>From</p><h5>USD 896</h5></span></a>--}}
{{--                            </li>--}}
{{--                            <li><a href=""><h4>Kigali to Mumbai</h4><span><p>From</p><h5>USD 896</h5></span></a></li>--}}
{{--                            <li><a href=""><h4>London to Lagos</h4><span><p>From</p><h5>USD 1095</h5></span></a></li>--}}
{{--                            <li><a href=""><h4>Duala to Kigali</h4><span><p>From</p><h5>USD 1095</h5></span></a></li>--}}
{{--                            <li><a href=""><h4>Kigali to Nairobi</h4><span><p>From</p><h5>USD 990</h5></span></a></li>--}}
{{--                            <li><a href=""><h4>Kigali to London</h4><span><p>From</p><h5>USD 990</h5></span></a></li>--}}
{{--                            <li><a href=""><h4>London to Johannesburg</h4><span><p>From</p><h5>USD 789</h5></span></a>--}}
{{--                            </li>--}}
{{--                            <li><a href=""><h4>Johannesburg to Amsterdam</h4>--}}
{{--                                    <span><p>From</p><h5>USD 789</h5></span></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-app-wrap">
            <div class="container-rigid">
                <div class="home-offers-slider">
                    <ul class="">
                        <li>
                            <figure><img src="{{asset('assets/site/images/home-app.png')}}"/></figure>
                            <div class="bx-caption">
                                <div class="display-caption">
                                    <div class="slider-vertical">
                                        <h3 data-aos="">Plan your Travel on your terms</h3>
                                        <p data-aos="">Plan your travel with ease. seamless booking and more at your
                                            fingertips</p>

                                        <div class="qrcode-download">

                                            <div class="qrcode-download-col qrcode-download-col1">
                                                <figure><img src="{{asset('assets/site/images/home-qr-code.png')}}"/>
                                                </figure>
                                            </div>

                                            <div class="qrcode-download-col qrcode-download-col2">
                                                <a href="https://play.google.com/store/apps/details?id=com.amadeus.mercimdp.wb&hl=en&gl=US;"
                                                   target="_blank">
                                                    <figure><img
                                                            src="{{asset('assets/site/images/google-playstore.png')}}">
                                                    </figure>
                                                </a>
                                                <a href="https://apps.apple.com/us/app/rwandair/id1455608534"
                                                   target="_blank">
                                                    <figure><img src="{{asset('assets/site/images/app-store.png')}}">
                                                    </figure>
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="home-news-snip-wrapper">
            <div class="container-rigid">
                <ul>
                    <li>
                        <div class="home-news-content">
                            <h3>Spread your wings and pay later</h3>
                            <p>Customers will have the opportunity to spread the cost of a booking over 3, 6 or 12-
                                monthly installments, either before departure or soon...</p>
                            <a href="">Read More</a>
                        </div>

                        <div class="home-news-image">
                            <figure><img src="{{asset('assets/site/images/home-fly.jpg')}}"></figure>
                        </div>
                    </li>

                    <li>
                        <div class="home-news-content">
                            <h3>Discover our partner Qatar Airways</h3>
                            <p>RwandAir and Qatar Airways join forces to give customers greater choice over combined
                                networks, as it enables passengers to benefit from...</p>
                            <a href="">Read More</a>
                        </div>

                        <div class="home-news-image">
                            <figure><img src="{{asset('assets/site/images/home-partnership.jpg')}}"></figure>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </section>

@endsection


