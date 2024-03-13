@extends('layouts.main')
@section('content')

    <section>

        <div class="careers-page">

            <div class="single-fleet-banner">
                <div class="container-rigid">
                    <div class="careers-banner-figure">
                        <figure data-aos="fade-left">
                            <img src="images/careers-icon.png" loading="lazy">
                        </figure>
                    </div>

                    <div class="careers-banner-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">Experience Award <br> Winning Excellence</h1>
                                <!--<p>A 360º tour of our Boeing 737- 800 NG.</p>-->
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
                            <li data-aos="fade-right"><a href="fleet.html" class="active-crumb"><p>Careers</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-rigid">

                <div class="become-part-list">
                    <h3 data-aos="fade-right">Become A Part of Rwandair Family</h3>
                    <ul>
                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/plan-insurance.svg"></figure>
                                <h4>Cabin crew </h4>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/plan-care.svg"></figure>
                                <h4>Administrative/ Technical Unit</h4>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/plan-explore.svg"></figure>
                                <h4>Cockpit crew </h4>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/plan-requirements.svg"></figure>
                                <h4>Newly Graduate / Student </h4>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="vacant-positions">

                    <div class="vacant-position-item-heading">
                        <ol>
                            <li data-aos="fade-right">Vacant Positions</li>
                            <li data-aos="fade-up">Department</li>
                            <li data-aos="fade-left">Location</li>
                        </ol>
                    </div>

                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                            <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                    Employee</a></li>
                            <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                            <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                    Employee</a></li>
                            <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                            <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                    Employee</a></li>
                            <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                            <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                    Employee</a></li>
                            <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="invisible-vacant-positions">

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                        Reporting)</a></li>
                                <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                        Employee</a></li>
                                <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                            </ul>
                        </div>

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                        Reporting)</a></li>
                                <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                        Employee</a></li>
                                <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                            </ul>
                        </div>

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                        Reporting)</a></li>
                                <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                        Employee</a></li>
                                <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                            </ul>
                        </div>

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="single-career.html">Take-Off Sr. (Audit and Financial
                                        Reporting)</a></li>
                                <li data-aos="fade-up"><a href="single-career.html">Administrative/Technical Unit
                                        Employee</a></li>
                                <li data-aos="fade-left"><a href="single-career.html">Rwanda</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="view-more-vacancies" data-aos="fade-right">
                        <button>View All</button>
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
                            <img src="images/Kamembe.jpg"/>
                            <div class="bx-caption">
                                <div class="display-caption">
                                    <div class="slider-vertical">
                                        <h3 data-aos="fade-right">Kamembe exclusive holiday offer</h3>
                                        <p data-aos="fade-right">Book your flight and enjoy special rates <br> at the
                                            Mantis
                                            Kivu Marina Bay hotel</p>
                                        <a href="dreammiles.html" data-aos="fade-right">Explore More</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforelse
                </ul>
            </div>

            <div class="container-rigid">

                <div class="career-stats">
                    <ul>
                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/career-cabin.svg"></figure>
                                <div class="career-stats-details">
                                    <span>31340</span>
                                    <h4>Staff</h4>
                                </div>

                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/career-admin.svg"></figure>
                                <div class="career-stats-details">
                                    <span>9</span>
                                    <h4>Airplanes</h4>
                                </div>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/career-cockpit.svg"></figure>
                                <div class="career-stats-details">
                                    <span>342</span>
                                    <h4>Flights</h4>
                                </div>
                            </a>
                        </li>

                        <li data-aos="zoom-in">
                            <a href="">
                                <figure><img src="images/career-grad.svg"></figure>
                                <div class="career-stats-details">
                                    <span>129</span>
                                    <h4>Countries</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="know-more">
                    <h3 data-aos="fade-right">Want to know more</h3>
                    <p data-aos="fade-right">Visit our Linkedin Page to learn more about our work culture</p>
                    <div class="know-more-linked">
                        <a href="" data-aos="fade-right">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #section -->
@endsection































