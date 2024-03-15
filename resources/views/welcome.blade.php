@extends('layouts.site.main')
@section('content')
    <main class="container">
        <div class="hidden1" id="content1">
            @include('layouts.site.menu')
            <section>
                <div class="home-slider-form-wrapper">

                    <div class="home-slider-wrapper">
                        <ul class="bxslider">
                            <li>
                                <img src="{{asset('assets/site/images/slider_banner.jpg')}}"/>
                                <div class="bx-caption hm-bx-caption" id="slider_content">
                                    <!--<div class="display-caption">-->
                                    <!--    <div class="slider-vertical">-->
                                    <h1>Enjoy More Convenience with <br> 6 weekly nonstop flights</h1>
                                    <p>Starting 28 October</p>
                                    <a href="">Learn More</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @include('includes.bookingform')
                </div>

                <div class="home-plan-trip-wrapper">
                    <div class="container-rigid">
                        <!--<h3 >Plan your trip</h3>-->
                        <ul>
                            <li>
                                <a href="{{url("#destination.html")}}">
                                    <figure><img src="{{asset('assets/site/images/book-hotels.png')}}"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Book Hotels</p>
                                        <i class="fi fi-sr-plus"></i>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('#travel-requirements.html')}}">
                                    <figure><img src="{{asset('assets/site/images/book-cars.png')}}"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Book Cars</p>
                                        <i class="fi fi-sr-plus"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('#special-assistance.html')}}">
                                    <figure><img src="{{asset('assets/site/images/book-tours.png')}}"></figure>
                                    <div class="plan-trip-caption">
                                        <p>Book Tours</p>
                                        <i class="fi fi-sr-plus"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('#travel-insurance.html')}}">
                                    <figure><img src="{{asset('assets/site/images/upgrade.png')}}"></figure>
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
                        <h2>Discover your next trip</h2>
                        <div class="sustainability-sponsors">
                            <ul>
                                <li>
                                    <figure><img src="{{asset('assets/site/images/sustainability-corporate.jpg')}}">
                                    </figure>
                                    <div class="media-center-caption">
                                        <div class="entry-space">
                                            <h3>Entry Requirement</h3>

                                            <p>The information below is dynamic and may change anytime on short
                                                notice.
                                                Therefore,
                                                we recommend...</p>
                                        </div>


                                        <a href=""><span>Travel Requirement</span><i
                                                class="fi fi-rr-angle-right"></i></a>
                                    </div>

                                </li>

                                <li>
                                    <figure><img
                                            src="{{asset('assets/site/images/sustainability-sponsorship.jpg')}}"
                                            alt="ticket flexibilty">
                                    </figure>
                                    <div class="media-center-caption">
                                        <div class="entry-space">
                                            <h3>Ticket Flexibility</h3>

                                            <p>RwandAir flexible policies on rebooking, cancellations and
                                                refunds...</p>
                                        </div>
                                        <a href=""><span>Discover More</span><i
                                                class="fi fi-rr-angle-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <figure><img src="{{asset('assets/site/images/sustainability-tender.jpg')}}">
                                    </figure>
                                    <div class="media-center-caption">
                                        <div class="entry-space">
                                            <h3>Deals and Offers</h3>

                                            <p>Make your Christmas plans with us and save up to 30% with a promo
                                                code.Therefore,
                                                we
                                                recommend...</p>
                                        </div>

                                        <a href=""><span>Check it out</span><i class="fi fi-rr-angle-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dont-miss-offer-wrapper">
                    <div class="container-rigid">
                        <div class="dont-miss-dropselect">
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
                                <ul id="other_offers">
                                </ul>
                            </div>

                            <div class="view-more-offers"><p>*Prices, including all taxes, fees and surcharges,
                                    may
                                    vary and are intended to guide your selection.</p><a href="">View More
                                    Offers</a></div>
                        </div>
                    </div>

                </div>

                <div class="home-offers-slider home-dreammiles-slide">
                    <div class="container-rigid">
                        <ul class="">

                            <li>
                                <img src="{{asset('assets/site/images/home-dreamiles.jpg')}}"/>
                                <div class="container-rigid">
                                    <div class="bx-caption"
                                         style="padding:0;background-image:none;left: unset;right: unset;">

                                        <div class="display-caption">
                                            <div class="slider-vertical">
                                                <div class="dreammiles-caption">
                                                    <h3>Experience a world <br> DreamMiles benefits.</h3>
                                                    <br>
                                                    <p>We reward travelers exclusively for flying with us. Joining
                                                        is
                                                        simple</p>
                                                    <br>
                                                    <a href="dreammiles.html">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                        </ul>
                    </div>
                </div>

                <div class="discover-next-best">
                    <div class="container-rigid">
                        <div class="row best-trending-row">
                            <h3>Best trending destinations</h3>
                        </div>
                        <div class="discover-next-best-row">
                            <div class="discover-next-best-col discover-next-best-col1">
                                <figure>
                                    <div class="discover-next-book">
                                        <h3>Best deal to Paris</h3>
                                        <a href="">Book Now</a>
                                    </div>
                                </figure>

                                <div class="best-discover">
                                    <h4>Discover with us the beauty<br> to Paris</h4>
                                    <p>Save with our cheap flights to Paris.</p>
                                    <a href="">Book Now</a>
                                </div>
                            </div>

                            <div class="discover-next-best-col discover-next-best-col2">
                                <ul>
                                    <div id="output1"></div>
                                    <div id="output2"></div>
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
                                    <div class="bx-caption"
                                         style="background-image:none;position:unset;padding-top:60px;padding-left:3em;">
                                        <div class="display-caption">
                                            <div class="slider-vertical">
                                                <h3>Plan your Travel on your terms</h3>
                                                <p>Plan your travel with ease. seamless booking and more at your
                                                    fingertips</p>

                                                <div class="qrcode-download">

                                                    <div class="qrcode-download-col qrcode-download-col1">
                                                        <figure><img
                                                                src="{{asset('assets/site/images/home-qr-code.png')}}"/>
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
                                                            <figure><img
                                                                    src="{{asset('assets/site/images/app-store.png')}}">
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
                                    <p>Customers will have the opportunity to spread the cost of...</p>
                                    <a href="">Read More</a>
                                </div>
                                <div class="home-news-image">
                                    <figure><img src="{{asset('assets/site/images/home-fly.jpg')}}"></figure>
                                </div>
                            </li>
                            <li>
                                <div class="home-news-content">
                                    <h3>Discover our partner Qatar Airways</h3>
                                    <p>RwandAir and Qatar Airways join forces to give customers...</p>
                                    <a href="">Read More</a>
                                </div>

                                <div class="home-news-image">
                                    <figure><img src="{{asset('assets/site/images/home-partnership.jpg')}}">
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footer-wrapper">
                    <div class="container-rigid">
                        <div class="footer-trip-planning-wrapper">
                            <h3>Start planning your next trip</h3>
                            <ul>
                                <li><a href="https://flights.rwandair.com/en/flights-to-africa/"
                                       target="_blank">
                                        <figure><img src="{{asset('assets/site/images/continent-africa.svg')}}">
                                        </figure>
                                        <p>Flight to Africa</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                                <li><a href="https://flights.rwandair.com/en/flights-to-europe/"
                                       target="_blank">
                                        <figure><img src="{{asset('assets/site/images/continent-europe.svg')}}">
                                        </figure>
                                        <p>Flight to Europe</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                                <li><a href="https://flights.rwandair.com/en/flights-to-asia/" target="_blank">
                                        <figure><img src="{{asset('assets/site/images/continent-asia.svg')}}">
                                        </figure>
                                        <p>Flight to Asia</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                                <li><a href="https://flights.rwandair.com/en/flights-to-middleeast/"
                                       target="_blank">
                                        <figure><img
                                                src="{{asset('assets/site/images/continent-middle-east.svg')}}">
                                        </figure>
                                        <p>Flight to Middle East</p><i class="fi fi-rr-angle-small-right"></i></a>
                                </li>
                                <li><a href="https://flights.rwandair.com/en/flights-to-americas/"
                                       target="_blank">
                                        <figure><img src="{{asset('assets/site/images/continent-america.svg')}}">
                                        </figure>
                                        <p>Flight to America</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-bg-color">

                        <div class="container-rigid">

                            <div class="footer-main-links">
                                <div class="footer-main-links-columns">
                                    <h4>About Us</h4>
                                    <ul>
                                        <li><a href="about-us.html">Who We Are</a></li>
                                        <li><a href="fleet.html">Fleet</a></li>
                                        <li><a href="partnership.html">Partners</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="awards.html">Awards</a></li>
                                        <li><a href="sustainability.html">Sustainability</a></li>
                                        <li><a href="media-center.html">Media Center</a></li>
                                    </ul>
                                </div>

                                <div class="footer-main-links-columns">
                                    <h4>Destinations</h4>
                                    <ul>
                                        <li><a href="https://flights.rwandair.com/en/flights-to-africa/"
                                               target="_blank">Africa</a></li>
                                        <li><a href="https://flights.rwandair.com/en/flights-to-europe/"
                                               target="_blank">Europe</a></li>
                                        <li><a href="https://flights.rwandair.com/en/flights-to-asia/"
                                               target="_blank">Asia</a>
                                        </li>
                                        <li><a href="https://flights.rwandair.com/en/flights-to-middleeast/"
                                               target="_blank">Middle
                                                East</a></li>
                                        <li><a href="https://flights.rwandair.com/en/flights-to-americas/"
                                               target="_blank">America</a>
                                        </li>
                                        <li><a href="route-map.html">Route Map</a></li>
                                    </ul>
                                </div>
                                <div class="footer-main-links-columns">
                                    <h4>Help</h4>
                                    <ul>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="help-center.html">FAQs</a></li>
                                        <li><a href="seat.html">Seat Selection</a></li>
                                        <li><a href="special-assistance.html">Special Assistance</a></li>
                                    </ul>
                                </div>

                                <div class="footer-main-links-columns">
                                    <h4>Cargo Solutions</h4>
                                    <ul>
                                        <li><a href="https://flyingwithdragonfly.com/cargo/" target="_blank">Rwandair
                                                Cargo</a>
                                        </li>
                                        <li><a href="https://flyingwithdragonfly.com/cargo/" target="_blank">Cargo
                                                Tracking</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="social-apps-wrapper">
                                <div class="social-apps-columns">
                                    <p>Travel Made Simpler.</p>
                                    <p>Book and manage flights on the go!</p>
                                </div>
                                <div class="social-apps-columns">
                                    <ol>
                                        <li>
                                            <a href="https://play.google.com/store/apps/details?id=com.amadeus.mercimdp.wb&hl=en&gl=US;"
                                               target="_blank">
                                                <figure><img
                                                        src="{{asset('assets/site/images/google-playstore.png')}}">
                                                </figure>
                                            </a></li>
                                        <li><a href="https://apps.apple.com/us/app/rwandair/id1455608534"
                                               target="_blank">
                                                <figure><img src="{{asset('assets/site/images/app-store.png')}}">
                                                </figure>
                                            </a></li>
                                    </ol>
                                </div>

                                <div class="social-apps-columns">
                                    <ol>
                                        <li><a href="awards.html">
                                                <figure><img
                                                        src="{{asset('assets/site/images/skytrax-award.png')}}">
                                                </figure>
                                            </a></li>
                                        <li><a href="awards.html">
                                                <figure><img src="{{asset('assets/site/images/apex-award.png')}}">
                                                </figure>
                                            </a></li>
                                    </ol>
                                </div>

                                <div class="social-apps-columns">
                                    <ul>
                                        <li><p>Follow Us</p></li>
                                        <li><a href="https://www.linkedin.com/company/flyrwandair/" target="_blank"><i
                                                    class="fa-brands fa-linkedin-in"></i> </a></li>
                                        <li><a href="https://twitter.com/FlyRwandAir" target="_blank"><i
                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/FlyRwandAir/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/flyrwandair/" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/user/flyrwandair" target="_blank"><i
                                                    class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="important-footer-bottom-links">
                                <ul>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="legal.html">Legal</a></li>
                                    <li><a href="sustainability.html">Sustainability</a></li>
                                    <li><a href="contract.html">Contract of Carriage</a></li>
                                    <li><a href="cookies.html">Cookies, Privacy, & Security</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back-to-top-wrapper">
                    <a href="#" class="go-top"><p>Go Top</p> <i class="fas fa-arrow-up"></i></a>
                </div>
            </footer><!-- #footer -->
        </div>
    </main><!-- #main -->
@endsection
