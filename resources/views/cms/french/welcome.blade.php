@extends('layouts.main')
@section('content')
    <section>
        <div class="home-slider-form-wrapper">
            <div class="home-slider-wrapper" data-aos="fade-up">
                <ul class="bxslider">
                    @forelse($sliders->where('position','Home Slider') as $slider)
                        <li>
                            <img src="{{asset('').'storage/'.$slider->image}}"/>
                            <div class="bx-caption">
                                <div class="display-caption">
                                    <div class="slider-vertical">
                                        <h1 data-aos="fade-right">{{$slider->title}}</h1>
                                        <p data-aos="fade-right">{!! $slider->description !!}</p>
                                        <a href="{{$slider->url}}" data-aos="fade-right">Explore More</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li>
                            <img src="{{asset('images/Abuja.jpg')}}"/>
                            <div class="bx-caption">
                                <div class="display-caption">
                                    <div class="slider-vertical">
                                        <h1 data-aos="fade-right">Dreamiles</h1>
                                        <p data-aos="fade-right">Benefit from app-exclusive offers, personalised
                                            notifications,<br> seamless
                                            booking functions, journey tracking and more.</p>
                                        <a href="" data-aos="fade-right">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforelse
                </ul>
            </div>
            @include('includes.flightform')
        </div>

        <div class="home-plan-trip-wrapper">
            <div class="container-rigid">
                <h3 data-aos="zoom-in">Plan your trip</h3>
                <ul>
                    <li data-aos="zoom-in">
                        <a href="{{url('destination')}}">
                            <figure><img src="{{asset('images/plan-explore.svg')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Explore Destinations</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('travel-requirements')}}">
                            <figure><img src="{{asset('images/plan-requirements.svg')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Travel Requirements</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('special-assistance')}}">
                            <figure><img src="{{asset('images/plan-care.svg')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Special Care</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('travel-insurance')}}">
                            <figure><img src="{{asset('images/plan-insurance.svg')}}"></figure>
                            <div class="plan-trip-caption">
                                <p>Travel Insurance</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="cities-pattern" data-aos="zoom-in">
            <figure><img src="{{asset('images/cities-pattern-lightblue.svg')}}"></figure>
        </div>

        <div class="dont-miss-offer-wrapper">
            <div class="container-rigid">
                <div class="dont-miss-dropselect" data-aos="fade-right">
                    <h3>Don't miss our offers</h3>

                    <div class="cont_select_center">
                        <h5>From</h5>
                        <!-- Custom select structure -->
                        <div>
                            <select name="" onchange="" onclick="return false;" id="offers">
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
                    <div class="dont-miss-offer-columns-style dont-miss-offer-column1" id="first_offer">
                    </div>
                    <div class="dont-miss-offer-columns-style dont-miss-offer-column2">
                        <ul id="other_offers">
                        </ul>
                    </div>
                    <div class="view-more-offers" data-aos="fade-right"><a href="">View More Offers</a></div>
                </div>
            </div>
        </div>
        <div class="home-offers-slider">
            <ul class="bxslider">
                @forelse($sliders->where('position','Home Services & Product') as $slider)
                    <li>
                        <img src="{{asset('').'storage/'.$slider->image}}"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h3 data-aos="fade-right">{{$slider->title}}</h3>
                                    <p data-aos="fade-right">{!! $slider->description !!}</p>
                                    <a href="{{$slider->url}}" data-aos="fade-right">Explore More</a>

                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li>
                        <img src="{{asset('images/Kamembe.jpg')}}"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h3 data-aos="fade-right">Kamembe exclusive holiday offer</h3>
                                    <p data-aos="fade-right">Book your flight and enjoy special rates <br> at the Mantis
                                        Kivu Marina Bay hotel</p>
                                    <a href="{{url('dreammiles')}}" data-aos="fade-right">Explore More</a>

                                </div>
                            </div>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>


        <div class="more-than-flight-wrapper">
            <div class="container-rigid">
                <h3 data-aos="zoom-in">Looking for more than a flight?</h3>
                <ul>
                    <li data-aos="zoom-in">
                        <a href="https://cars.cartrawler.com/rwandair/?ClientID=534058#/searchcars" target="_blank">
                            <figure><img src="{{asset('images/rent-car.svg')}}"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Rent a car at a favourable price</h4>
                                <p>with cartrawler</p>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="https://www.booking.com/index.html?aid=1469853#new_tab" target="_blank">
                            <figure><img src="{{asset('images/book-accomodation.svg')}}"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Book your accomodation</h4>
                                <p>with booking.com</p>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="http://www.rwandairdutyfree.com/" target="_blank">
                            <figure><img src="{{asset('images/duty-free-shopping.svg')}}"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Duty free shopping</h4>
                                <p>with ikaze boutique</p>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('fr/inzozi')}}">
                            <figure><img src="{{asset('images/inzozi-magazine.svg')}}"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Inzozi Magazine</h4>
                                <p>with inzozi</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
