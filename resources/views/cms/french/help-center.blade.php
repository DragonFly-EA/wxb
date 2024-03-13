@extends('layouts.main')
@section('content')
    <section>
        <div class="help-center-page">
            <div class="no-banner-style">
                <figure><img src="images/imigongo-new.jpg"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Help Center</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="help-center-reservation">
                    <div class="help-center-seaech">
                        <div class="help-center-seaech-input">
                            <input type="search" placeholder="How can we help you?" data-aos="fade-up">
                            <i class="fi fi-rr-search"></i>
                        </div>

                        <div class="help-center-seaech-link">
                            <ul>
                                <li data-aos="fade-up"><a href="">Contact</a></li>
                                <li data-aos="fade-up"><a href="">Changes</a></li>
                                <li data-aos="fade-up"><a href="">Documents</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="help-center-reservation-title">
                        <h3 data-aos="fade-right"><i class="fi fi-rr-plane-departure"></i><b>Already have a
                                reservation?</b><a href="">You can access your reservation from here.</a></h3>
                    </div>

                    <div class="help-center-reservation-table">

                        <div class="help-center-reservation-column1">
                            <h4 data-aos="fade-right">Access your reservation</h4>
                            <p data-aos="fade-right">Begin session to view information about your upcoming flights. You
                                can also access flight information with your booking number and email address or the
                                surname of any passenger on your booking.</p>

                            <div class="align-bottom">
                                <h5 data-aos="fade-right"><i class="fi fi-rr-envelope-download"></i><b>Don't you
                                        remember the booking number?</b><a href="">Resend confirmation email</a></h5>
                            </div>
                        </div>

                        <diiv class="help-center-reservation-column2">
                            <form>
                                <div class="help-input-relative" data-aos="fade-left">
                                    <input type="text" placeholder="Booking number">
                                    <i class="fi fi-rr-time-check"></i>
                                </div>
                                <div class="help-input-relative" data-aos="fade-left">
                                    <input type="text" placeholder="Last name or email address">
                                    <i class="fi fi-rr-time-check"></i>
                                </div>

                                <div class="help-form-button" data-aos="fade-left">
                                    <button type="submit">Continue</button>
                                </div>

                                <div class="help-form-or" data-aos="fade-left">
                                    <b></b>
                                    <p>OR</p> <b></b>
                                </div>
                                <div class="help-form-login" data-aos="fade-left"><a href="">Log in</a></div>

                            </form>
                        </diiv>

                    </div>

                    <div class="seek-help-category">

                        <h3 data-aos="fade-right">Seek help by category</h3>

                        <ul>
                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                            <li data-aos="zoom-in">

                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                        <p>Information related to baggage and any extra services you may need </p>
                                    </div>

                                </a>

                            </li>

                        </ul>

                        <div class="content-container">
                            <div class="content">
                                <div class="section">Content for Link 1</div>
                                <div class="section">Content for Link 2</div>
                                <!-- Add more content sections as needed -->
                            </div>
                        </div>

                    </div>

                    <div class="help-featured-action">

                        <h3 data-aos="fade-up">Featured Actions</h3>

                        <ul>
                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>

                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>

                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>

                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>

                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>

                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>

                            <li data-aos="zoom-in">
                                <a href="" onclick="showContent(0)">

                                    <figure><i class="fi fi-rr-briefcase"></i></figure>
                                    <div class="seek-help-category-details">
                                        <h5>Baggage and Extra Services</h5>
                                    </div>

                                </a>
                            </li>
                        </ul>

                        <div class="content-container">
                            <div class="content">
                                <div class="section">Content for Link 1</div>
                                <div class="section">Content for Link 2</div>
                                <!-- Add more content sections as needed -->
                            </div>
                        </div>

                    </div>

                    <div class="help-faqs">
                        <div class="application">

                            <h4 data-aos="fade-up">FAQs</h4>

                            <div class="faqs-wrapper">

                                <ul class="faqs">
                                    <li data-aos="fade-up">
                                        <a href="#" class="question">Will my upcoming flight be Wi-Fi enabled?</a>
                                        <div class="desc">
                                            <p>All our A350 Aircrafts have Wi-Fi and most of our B777 and B787 are
                                                currently being equipped.</p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up">
                                        <a href="#" class="question">What if I can’t access the service on-board?</a>
                                        <div class="desc">

                                            <p>If you can’t access the service on-board due to technical problem and
                                                payed for it, you will be refunded.</p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up">
                                        <a href="#" class="question">How do I know if the Aircraft has W-FI
                                            available?</a>
                                        <div class="desc">
                                            <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an
                                                announcement regarding the availability and type of Wi-Fi service we
                                                have at the beginning of the flight.</p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up">
                                        <a href="#" class="question">Will my upcoming flight be Wi-Fi enabled?</a>
                                        <div class="desc">
                                            <p>All our A350 Aircrafts have Wi-Fi and most of our B777 and B787 are
                                                currently being equipped.</p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up">
                                        <a href="#" class="question">What if I can’t access the service on-board?</a>
                                        <div class="desc">

                                            <p>If you can’t access the service on-board due to technical problem and
                                                payed for it, you will be refunded.</p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up">
                                        <a href="#" class="question">How do I know if the Aircraft has W-FI
                                            available?</a>
                                        <div class="desc">
                                            <p>On aircrafts equipped with Wi-Fi, the cabin crew will make an
                                                announcement regarding the availability and type of Wi-Fi service we
                                                have at the beginning of the flight.</p>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #section -->
@endsection
