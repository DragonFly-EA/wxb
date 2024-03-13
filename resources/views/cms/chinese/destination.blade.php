@extends('layouts.main')
@section('content')
    <section>
        <div class="home-slider-wrapper" data-aos="fade-up">
            <ul class="bxslider">
                <li>
                    <img src="{{$banner_url}}"/>
                    <div class="bx-caption">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">{{$destination}}</h1>
                                <p data-aos="fade-right">Benefit from app-exclusive offers, personalised
                                    notifications,<br> seamless
                                    booking functions, journey tracking and more.</p>
                                <!--<a href="" data-aos="fade-right">Explore More</a>-->

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        @include('includes.flightform')
        </div>
        <div class="dest-cont-wrap">
            <div class="container-rigid">
                <div class="luggage-checkin-row">
                    <div class="luggage-checkin-details-column">
                        <div class="checkin-weight">
                            <h3>Interesting Facts About {{$destination}}</h3>
                            <p>{!! $requirements!==""?$requirements:"No Travel Information about this destination" !!}</p>
{{--                            <p>Get away to relaxing Abuja! Enjoy the theme park, spas and parks. Did you know Abuja is--}}
{{--                                the only African Capital City built especially for that purpose?--}}

{{--                            <p>Some of the splendid attractions in Abuja include two monoliths, as well as government--}}
{{--                                buildings and religious centers. A tour of Abuja reveals the modern architecture of this--}}
{{--                                young, growing city, while informal spaces known as bush bars serve up drinks and snacks--}}
{{--                                to eager visitors and tourists.</p>--}}

{{--                            <p>Abuja is a city planned for cars, with loop highway around the city and broad avenues.--}}
{{--                                For tourists, taxis are bountiful and inexpensive, and transport apps such as Uber work--}}
{{--                                well. Most are green 'painted' taxis and some very beaten up, but they get you--}}
{{--                                there.</p>--}}

{{--                            <p>You can access other towns from Abuja by bus like Lagos, Benin, Kano and Port Harcourt.--}}
{{--                                The dry season lasts from November to March, there’s occasionally sandstorms caused by--}}
{{--                                the harmattan wind. The warm and humid season lasts from April to October.</p>--}}
                        </div>

                    </div>

                    <div class="luggage-checkin-icon-column">
                        <figure>
                            <img src="{{asset('images/buggage-luggage.svg')}}">
                        </figure>
                        <div class="luggage-checkin-icon">
                            <b><i class="fi fi-rr-info"></i>
                                <h3>About the bag price</h3></b>

                            <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each
                                suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg. For
                                each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                                you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            <a href="">Add Check-in Bags</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">

                <div class="sustainability-sponsors">
                    <ul>
                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/sustainability-corporate.jpg')}}"></figure>
                            <div class="media-center-caption">
                                <h3>Corporate policies</h3>

                                <p>RwandAir is one of the fastest growing airlines and operates one of the youngest and
                                    state of the art fleet on the African continent</p>


                            </div>

                        </li>

                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/sustainability-sponsorship.jpg')}}"></figure>
                            <div class="media-center-caption">
                                <h3>Sponsorship</h3>

                                <p>The airline, which is also well reputed for an excellent on time performance, reaches
                                    out to twenty-two cities in Western, Central, Eastern and Southern Africa, the
                                    Middle East, Asia and Europe.</p>


                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/sustainability-tender.jpg')}}"></figure>
                            <div class="media-center-caption">
                                <h3>Tender notices</h3>

                                <p>RwandAir is a member airline of the International Air Transportation Association
                                    (IATA) , an EASA,IOSA and ISAGO certified operator.</p>


                            </div>
                        </li>

                    </ul>
                </div>


                <div class="checkin-charges-table">
                    <p>Our charges per bag are</p>
                    <table>
                        <thead>
                        <tr>
                            <th>Weight</th>
                            <th>On the Website/App</th>
                            <th>At Check In</th>
                            <th>At the boarding gate</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10 Kg</td>
                            <td>From USD 23</td>
                            <td>From USD 23</td>
                            <td>From USD 23</td>
                        </tr>

                        <tr>
                            <td>20 Kg</td>
                            <td>From USD 23</td>
                            <td>From USD 23</td>
                            <td>From USD 23</td>
                        </tr>

                        <tr>
                            <td>25 Kg</td>
                            <td>From USD 23</td>
                            <td>From USD 23</td>
                            <td>From USD 23</td>
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="dont-miss-offer-wrapper">
            <div class="container-rigid">
                <div class="dont-miss-dropselect" data-aos="fade-right">
                    <h3>Related Destinations</h3>

                </div>

                <div class="dont-miss-offer-columns">
                    <div class="dont-miss-offer-columns-style dont-miss-offer-column1">
                        <ul>
                            <li data-aos="fade-right">
                                <figure><img src="{{asset('images/London_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Abuja_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Accra_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Ethiopia_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Nairobi_Thumbnail.jpg')}}"></figure>
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
                </div>


                <div class="dont-miss-offer-columns">

                    <div class="dont-miss-offer-columns-style dont-miss-offer-column2">
                        <ul>
                            <li data-aos="fade-left">
                                <figure><img src="{{asset('images/Abuja_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Accra_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Ethiopia_Thumbnail.jpg')}}"></figure>
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
                                <figure><img src="{{asset('images/Nairobi_Thumbnail.jpg')}}"></figure>
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

                    <div class="dont-miss-offer-columns-style dont-miss-offer-column1">
                        <ul>
                            <li data-aos="fade-right">
                                <figure><img src="{{asset('images/London_Thumbnail.jpg')}}"></figure>
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


                    <div class="view-more-offers" data-aos="fade-right"><a href="">View More Offers</a></div>
                </div>

                <div class="application">

                    <div class="faqs-wrapper">

                        <ul class="faqs">
                            <li>
                                <a href="#" class="question">Africa</a>
                                <div class="desc">
                                    <p>All our A350 Aircrafts have Wi-Fi and most of our B777 and B787 are currently
                                        being equipped.</p>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="question">Asia</a>
                                <div class="desc">
                                    <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an announcement
                                        regarding the availability and type of Wi-Fi service we have at the beginning of
                                        the flight.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="question">Europe</a>
                                <div class="desc">

                                    <p>If you can’t access the service on-board due to technical problem and payed for
                                        it, you will be refunded.</p>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="question">America</a>
                                <div class="desc">
                                    <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an announcement
                                        regarding the availability and type of Wi-Fi service we have at the beginning of
                                        the flight.</p>
                                </div>
                            </li>

                            <li>
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

        </div>
    </section><!-- #section -->
@endsection
