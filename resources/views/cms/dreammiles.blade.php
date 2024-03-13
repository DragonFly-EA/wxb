@extends('layouts.main')
@section('content')
    <section>
        <div class="fleet-page">
            <div class="no-banner-style">
                <figure><img src="{{asset('images/imigongo-new.jpg')}}" alt="banner"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Dreammiles</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container-rigid">
                    <div class="breadcrumbs-list">
                        <ul>
                            <li data-aos="fade-right"><a href="#"><p>Loyalty</p><i
                                        class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Dreammiles</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="home-plan-trip-wrapper">
                <div class="container-rigid">
                    <h3 data-aos="zoom-in">Plan your trip</h3>
                    <ul>
                        <li data-aos="zoom-in">
                            <a href="#">
                                <figure><img src="{{asset('images/plan-explore.svg')}}" alt="plan"></figure>
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
                            <a href="{{url('special-assistance')}}">
                                <figure><img src="{{asset('images/plan-care.svg')}}" alt="plan"></figure>
                                <div class="plan-trip-caption">
                                    <p>Special Care</p>
                                    <i class="fi fi-ts-arrow-circle-right"></i>
                                </div>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="{{url('travel-insurance')}}">
                                <figure><img src="{{asset('images/plan-insurance.svg')}}" alt="plan"></figure>
                                <div class="plan-trip-caption">
                                    <p>Travel Insurance</p>
                                    <i class="fi fi-ts-arrow-circle-right"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-rigid">
                <div class="fleet-lists">

                    <ul>
                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/emerald.png')}}" alt="emerald"></figure>
                            <div class="fleet-details">
                                <div class="fleet-title">
                                    <h3>One Airbus A330 – 300</h3>
                                    <h4>Seating Capacity:</h4>
                                </div>
                                <div class="fleet-classes-columns">
                                    <div class="fleet-class-column1">
                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>30</h4>
                                            <p>Business Class</p>
                                        </b>

                                    </div>
                                    <div class="fleet-class-column2">
                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>244</h4>
                                            <p>Economy Class</p>
                                        </b>

                                    </div>

                                </div>
                                <div class="fleet-ordered-lists">
                                    <ol>
                                        <li>Cargo Capacity 132.20m³</li>
                                        <li>Overall Length 63.69m</li>
                                        <li>Wingspan 60.30m</li>
                                        <li>Overall Height 17.18m</li>
                                        <li>Cabin Width 5.18m (Inside)</li>
                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>
                                        <li>Max. Takeoff Weight 235t</li>
                                        <li>Cruising Speed / Max. Speed 1062.kph</li>
                                    </ol>

                                </div>

                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/silver.png')}}" alt="silver"></figure>
                            <div class="fleet-details">
                                <div class="fleet-title">
                                    <h3>One Airbus A330 – 300</h3>
                                    <h4>Seating Capacity:</h4>
                                </div>
                                <div class="fleet-classes-columns">
                                    <div class="fleet-class-column1">
                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>30</h4>
                                            <p>Business Class</p>
                                        </b>

                                    </div>
                                    <div class="fleet-class-column2">
                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>244</h4>
                                            <p>Economy Class</p>
                                        </b>

                                    </div>

                                </div>
                                <div class="fleet-ordered-lists">
                                    <ol>
                                        <li>Cargo Capacity 132.20m³</li>
                                        <li>Overall Length 63.69m</li>
                                        <li>Wingspan 60.30m</li>
                                        <li>Overall Height 17.18m</li>
                                        <li>Cabin Width 5.18m (Inside)</li>
                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>
                                        <li>Max. Takeoff Weight 235t</li>
                                        <li>Cruising Speed / Max. Speed 1062.kph</li>
                                    </ol>

                                </div>

                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/gold.png')}}" alt="gold"></figure>
                            <div class="fleet-details">
                                <div class="fleet-title">
                                    <h3>One Airbus A330 – 300</h3>
                                    <h4>Seating Capacity:</h4>
                                </div>
                                <div class="fleet-classes-columns">
                                    <div class="fleet-class-column1">
                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>30</h4>
                                            <p>Business Class</p>
                                        </b>

                                    </div>
                                    <div class="fleet-class-column2">
                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>244</h4>
                                            <p>Economy Class</p>
                                        </b>

                                    </div>

                                </div>
                                <div class="fleet-ordered-lists">
                                    <ol>
                                        <li>Cargo Capacity 132.20m³</li>
                                        <li>Overall Length 63.69m</li>
                                        <li>Wingspan 60.30m</li>
                                        <li>Overall Height 17.18m</li>
                                        <li>Cabin Width 5.18m (Inside)</li>
                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>
                                        <li>Max. Takeoff Weight 235t</li>
                                        <li>Cruising Speed / Max. Speed 1062.kph</li>
                                    </ol>

                                </div>

                            </div>
                        </li>

                        <li data-aos="fade-up">
                            <figure><img src="{{asset('images/diamond.png')}}" alt="diamond"></figure>
                            <div class="fleet-details">
                                <div class="fleet-title">
                                    <h3>One Airbus A330 – 300</h3>
                                    <h4>Seating Capacity:</h4>
                                </div>
                                <div class="fleet-classes-columns">
                                    <div class="fleet-class-column1">
                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>30</h4>
                                            <p>Business Class</p>
                                        </b>

                                    </div>
                                    <div class="fleet-class-column2">
                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>
                                        <b>
                                            <h4>244</h4>
                                            <p>Economy Class</p>
                                        </b>

                                    </div>

                                </div>
                                <div class="fleet-ordered-lists">
                                    <ol>
                                        <li>Cargo Capacity 132.20m³</li>
                                        <li>Overall Length 63.69m</li>
                                        <li>Wingspan 60.30m</li>
                                        <li>Overall Height 17.18m</li>
                                        <li>Cabin Width 5.18m (Inside)</li>
                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>
                                        <li>Max. Takeoff Weight 235t</li>
                                        <li>Cruising Speed / Max. Speed 1062.kph</li>
                                    </ol>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="home-plan-trip-wrapper">
                <div class="container-rigid">
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
                            <a href="{{url('travel-requirements')}}">
                                <figure><img src="{{asset('images/plan-requirements.svg')}}" alt="requirements"></figure>
                                <div class="plan-trip-caption">
                                    <p>Travel Requirements</p>
                                    <i class="fi fi-ts-arrow-circle-right"></i>
                                </div>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="{{url('special-assistance')}}">
                                <figure><img src="{{asset('images/plan-care.svg')}}" alt="plab"></figure>
                                <div class="plan-trip-caption">
                                    <p>Special Care</p>
                                    <i class="fi fi-ts-arrow-circle-right"></i>
                                </div>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="{{url('travel-insurance')}}">
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


    </section><!-- #section -->

@endsection






























