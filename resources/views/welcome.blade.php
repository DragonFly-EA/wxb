@extends('layouts.site.main')
@section('content')
    <main class="container">
        <header class="header-wrapper">
            <div class="desktop-header-wrapper">
                <div class="top-desktop-links">
                    <div class="container-rigid">
                        <div class="left-top-desktop-links">
                            <ul data-aos="">

                                <li><a>
                                        <!--<i class="fi fi-rr-info"></i> -->
                                        <p>Daily flight status updates: <b>Suspension of Mumbai flights.</b></p>

                                    </a></li>
                            </ul>
                        </div>
                        <div class="right-top-desktop-links">
                            <ul data-aos="">

                                <li><a href="travel-information.html"><b>Show More</b>

                                    </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-rigid bottom-desktop-links">
                    <div class="desktop-logo-wrapper" data-aos="">
                        <figure><a href="{{url('/')}}"><img src="{{asset('assets/site/images/rwandairlogo.png')}}"
                                                            alt="rwandair logo"></a></figure>
                    </div>
                    <div class="desktop-main-links">
                        <ul>

                            <li class="desktop-main-links-visible"><a href="" data-aos="" class="question-link">Explore
                                    <i
                                        class="fi fi-rr-angle-small-down"></i></a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Our Destinations</h3>
                                        <div class="dropdown-links-style dropdown-links-style-width">
                                            <li><a href="destination.html">Africa</a></li>
                                            <li><a href="destination.html">Europe</a></li>
                                            <li><a href="destination.html">Asia</a></li>
                                            <li><a href="destination.html">Middle East</a></li>
                                            <li><a href="destination.html">America</a></li>


                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <!--<h3>Destinations - Europe</h3>-->
                                        <h3>Popular Destinations</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="destination.html">Brussels</a></li>
                                            <li><a href="destination.html">London</a></li>
                                            <li><a href="destination.html">Paris</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <!--<h3>Destinations - Asia</h3>-->
                                        <h3>Visit Rwanda</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="stopover.html">Kigali Stopover</a></li>
                                            <li><a href="activites.html">Activities in Rwanda</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <!--<h3>Offers</h3>-->
                                        <h3>Holiday Packages/Discount Offers</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="offers.html">Flight Offers</a></li>
                                        </div>
                                    </div>

                                </ul>
                            </li>

                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">Book<i
                                        class="fi fi-rr-angle-small-down"></i>
                                </a>

                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Plan your Trip</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="flight-schedule.html">Flight Schedule</a></li>
                                            <li><a href="hotels.html">Hotels</a></li>
                                            <li><a href="car-rentals.html">Car Rentals</a></li>
                                            <li><a href="travel-insurance.html">Travel Insurance</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Travel Information</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="travel-requirements.html">Travel requirements</a></li>
                                            <li><a href="covid-information.html">COVID-19</a></li>
                                            <li><a href="health-information.html">Health Information</a></li>
                                            <li><a href="codeshare.html">Codeshare</a></li>
                                            <li><a href="flyingwithdragonfly.com/cargo/" target="_blank">Cargo</a></li>
                                            <li><a href="visa-requirements.html">Visa Requirements</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>
                                </ul>
                            </li>

                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">Experience <i
                                        class="fi fi-rr-angle-small-down"></i> </a>

                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Before you Fly</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="baggage-allowances.html">Baggage Allowances</a></li>
                                            <li><a href="restricted-items.html">Restricted Items</a></li>
                                            <li><a href="upgrade-journey.html">Upgrade your Journey</a></li>
                                            <li><a href="online-checkin.html">Online Check-in</a></li>
                                            <li><a href="airport-checkin.html">Check in at the airport</a></li>
                                            <li><a href="mobility-assistance.html">Mobility Assistance</a></li>
                                            <li><a href="expectant-mothers.html">Expectant mothers</a></li>
                                            <li><a href="unaccompanied-minor.html">Unaccompanied minor</a></li>
                                            <li><a href="special-meals.html">Special Meals</a></li>
                                            <li><a href="medica-assistance.html">Medical Assistance</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>At the airport</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="ikaze-dutyfree.html">Ikaze Duty-Free</a></li>
                                            <li><a href="dream-lounge.html">Dream Lounge</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>On Board</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="economy-class.html">Economy Class</a></li>
                                            <li><a href="business-class.html">Business Class</a></li>
                                            <li><a href="cuisine.html">Cuisine</a></li>
                                            <li><a href="onboard-connectivity.html">Onboard Connectivity "Wi-Fi"</a>
                                            </li>
                                            <li><a href="inflight-entertainment.html">Inflight Entertainment</a></li>
                                            <li><a href="inflight-magazine.html">Inflight Magazine "Inzozi"</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fi fi-rr-angle-small-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>


                                </ul>
                            </li>


                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">DreamMiles <i
                                        class="fi fi-rr-angle-small-down"></i> </a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Discover</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="about-dreammiles.html">About DreamMiles</a></li>
                                            <li><a href="tiers-benefits.html">Tiers & Benefits</a></li>
                                            <li><a href="family-program.html">Family Program</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                            <li><a href="partnership.html">Partners</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Redeem</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="earn-miles.html">Earn Miles</a></li>
                                            <li><a href="claim-missing-miles.html">Claim Missing Miles</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Spend</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="spend-miles.html">Spend your miles</a></li>
                                            <li><a href="upgrade-airport.html">Upgrade at the airport</a></li>
                                            <li><a href="global-wallet.html">Global Wallet</a></li>
                                        </div>

                                    </div>


                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>

                                </ul>
                            </li>

                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">Help <i
                                        class="fi fi-rr-angle-small-down"></i>
                                </a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>My Trip</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="help-center.html">Change Flight</a></li>
                                            <li><a href="help-center.html">Cancellation & Refund</a></li>
                                            <li><a href="help-center.html">Lost and found</a></li>
                                            <li><a href="help-center.html">Travel Alerts</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>FAQs</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="help-center.html">Travel Requirements</a></li>
                                            <li><a href="help-center.html">Travel Insurance</a></li>
                                            <li><a href="help-center.html">Covid - 19</a></li>
                                            <li><a href="help-center.html">Codeshare Partners</a></li>
                                            <li><a href="help-center.html">Medical Information</a></li>
                                            <li><a href="help-center.html">Unaccompanied Minors</a></li>
                                            <li><a href="help-center.html">Infant & Toddlers</a></li>
                                            <li><a href="help-center.html">Expectant Mothers</a></li>
                                            <li><a href="help-center.html">Reduced Mobility</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Contact Us</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="mailto:reservations@rwandair.com">Reservations :
                                                    reservations@rwandair.com</a></li>
                                            <li><a href="mailto:DreamMiles@rwandair.com">DreamMiles :
                                                    DreamMiles@rwandair.com</a></li>
                                            <li><a href="mailto:Cargo@rwandair.com">Cargo: Cargo@rwandair.com</a></li>
                                            <li><a href="mailto:customerrelations@rwandair.com">Customer relations:
                                                    customerrelations@rwandair.com</a></li>
                                            <li><a href="mailto:Lostandfound@rwandair.com">Lost and found:
                                                    Lostandfound@rwandair.com</a></li>
                                            <li><a href="mailto:Invoices@rwandair.com">Invoice:
                                                    Invoices@rwandair.com</a>
                                            </li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Give Feedback</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="desktop-account-signup" data-aos="">
                        <ul>
                            <li><a href="search.html"><i class="fi fi-rr-search"></i></a></li>
                            <li class="desktop-main-links-visible">

                                <div class="country-language">


                                    <div id="lang_selector" class="language-dropdown">
                                        <a href="" data-aos="" class="question-link">
                                            <label for="toggle" class="lang-flag lang-en"
                                                   title="Click to select the language">
                                                <span class="flag"></span>
                                            </label>

                                            <div id="lang_selected">
                                                <p>EN</p>
                                            </div>
                                        </a>
                                        <ul class="desktop-main-links-invisible">
                                            <select>
                                                <option data-display=" Round Trip "> Round Trip</option>
                                                <option value="1">One Way</option>
                                                <option value="2">Multi-City</option>
                                            </select>

                                        </ul>
                                    </div>

                                </div>
                            </li>
                            <li class="desktop-main-links-visible"><a href="" class="question-link"><i
                                        class="fi fi-rr-user"></i><b>LOG IN</b></a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>My Trip</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="help-center.html">Change Flight</a></li>
                                            <li><a href="help-center.html">Cancellation & Refund</a></li>
                                            <li><a href="help-center.html">Lost and found</a></li>
                                            <li><a href="help-center.html">Travel Alerts</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>FAQs</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="help-center.html">Travel Requirements</a></li>
                                            <li><a href="help-center.html">Travel Insurance</a></li>
                                            <li><a href="help-center.html">Covid - 19</a></li>
                                            <li><a href="help-center.html">Codeshare Partners</a></li>
                                            <li><a href="help-center.html">Medical Information</a></li>
                                            <li><a href="help-center.html">Unaccompanied Minors</a></li>
                                            <li><a href="help-center.html">Infant & Toddlers</a></li>
                                            <li><a href="shelp-center.html">Expectant Mothers</a></li>
                                            <li><a href="help-center.html">Reduced Mobility</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Contact Us</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="contact-us.html">Reservations : reservations@rwandair.com</a>
                                            </li>
                                            <li><a href="contact-us.html">DreamMiles : DreamMiles@rwandair.com</a></li>
                                            <li><a href="contact-us.html">Cargo: Cargo@rwandair.com</a></li>
                                            <li><a href="contact-us.html">Customer relations:
                                                    customerrelations@rwandair.com</a></li>
                                            <li><a href="contact-us.html">Lost and found: Lostandfound@rwandair.com</a>
                                            </li>
                                            <li><a href="contact-us.html">Invoice: Invoices@rwandair.com</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Customer Care</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="contact-us.html">Give Feedback</a></li>
                                        </div>
                                    </div>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="mobile-navigation" data-aos="">
                <div class="visible-mobile">

                    <div class="menu-icon">

                        <input type="checkbox" id="toggle"/>
                        <label for="toggle">
                            <i id="bars" class="mobile-menu-icon fi fi-rr-bars-sort"></i>
                            <i id="cross" class="mobile-menu-icon fi fi-rr-cross"></i>
                        </label>

                    </div>
                    <div class="mobile-logo-wrapper"><a href="index.html"><img
                                src="{{asset('assets/site/images/rwandairlogo.png')}}"></a></div>

                    <div class="demo-login-wrapper">

                        <div class="desktop-account-signup" data-aos="">
                            <ul>
                                <li><a href="search.html"><i class="fi fi-rr-search"></i></a></li>
                                <li>
                                    <div class="country-language">
                                        <div id="lang_selector" class="language-dropdown">
                                            <label for="toggle" class="lang-flag lang-en"
                                                   title="Click to select the language">
                                                <span class="flag"></span>
                                            </label>
                                            <ul class="lang-list">
                                                <li class="lang lang-en selected" title="EN">
                                                    <span class="flag"></span>
                                                </li>
                                                <li class="lang lang-pt" title="PT">
                                                    <span class="flag"></span>
                                                </li>
                                                <li class="lang lang-es" title="ES">
                                                    <span class="flag"></span>
                                                </li>

                                            </ul>
                                        </div>

                                        <div id="lang_selected">
                                            <p>EN</p>
                                        </div>
                                    </div>
                                </li>
                                <li><a href=""><i class="fi fi-rr-user"></i><b>LOG IN</b></a></li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="hidden-mobile">
                    <div class="desktop-main-links">
                        <ul>

                            <li class="desktop-main-links-visible"><a href="" data-aos="" class="question-link">Explore
                                    <i
                                        class="fi fi-rr-angle-small-down"></i></a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Our Destinations</h3>
                                        <div class="dropdown-links-style dropdown-links-style-width">
                                            <li><a href="destination.html">Africa</a></li>
                                            <li><a href="destination.html">Europe</a></li>
                                            <li><a href="destination.html">Asia</a></li>
                                            <li><a href="destination.html">Middle East</a></li>
                                            <li><a href="destination.html">America</a></li>


                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <!--<h3>Destinations - Europe</h3>-->
                                        <h3>Popular Destinations</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="destination.html">Brussels</a></li>
                                            <li><a href="destination.html">London</a></li>
                                            <li><a href="destination.html">Paris</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <!--<h3>Destinations - Asia</h3>-->
                                        <h3>Visit Rwanda</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="stopover.html">Kigali Stopover</a></li>
                                            <li><a href="activites.html">Activities in Rwanda</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <!--<h3>Offers</h3>-->
                                        <h3>Holiday Packages/Discount Offers</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="offers.html">Flight Offers</a></li>
                                        </div>
                                    </div>

                                </ul>
                            </li>

                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">Book<i
                                        class="fi fi-rr-angle-small-down"></i>
                                </a>

                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Plan your Trip</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="flight-schedule.html">Flight Schedule</a></li>
                                            <li><a href="hotels.html">Hotels</a></li>
                                            <li><a href="car-rentals.html">Car Rentals</a></li>
                                            <li><a href="travel-insurance.html">Travel Insurance</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Travel Information</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="travel-requirements.html">Travel requirements</a></li>
                                            <li><a href="covid-information.html">COVID-19</a></li>
                                            <li><a href="health-information.html">Health Information</a></li>
                                            <li><a href="codeshare.html">Codeshare</a></li>
                                            <li><a href="flyingwithdragonfly.com/cargo/" target="_blank">Cargo</a></li>
                                            <li><a href="visa-requirements.html">Visa Requirements</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>


                                </ul>
                            </li>

                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">Experience <i
                                        class="fi fi-rr-angle-small-down"></i> </a>

                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Before you Fly</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="baggage-allowances.html">Baggage Allowances</a></li>
                                            <li><a href="restricted-items.html">Restricted Items</a></li>
                                            <li><a href="upgrade-journey.html">Upgrade your Journey</a></li>
                                            <li><a href="online-checkin.html">Online Check-in</a></li>
                                            <li><a href="airport-checkin.html">Check in at the airport</a></li>
                                            <li><a href="mobility-assistance.html">Mobility Assistance</a></li>
                                            <li><a href="expectant-mothers.html">Expectant mothers</a></li>
                                            <li><a href="unaccompanied-minor.html">Unaccompanied minor</a></li>
                                            <li><a href="special-meals.html">Special Meals</a></li>
                                            <li><a href="medica-assistance.html">Medical Assistance</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>At the airport</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="ikaze-dutyfree.html">Ikaze Duty-Free</a></li>
                                            <li><a href="dream-lounge.html">Dream Lounge</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>On Board</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="economy-class.html">Economy Class</a></li>
                                            <li><a href="business-class.html">Business Class</a></li>
                                            <li><a href="cuisine.html">Cuisine</a></li>
                                            <li><a href="onboard-connectivity.html">Onboard Connectivity "Wi-Fi"</a>
                                            </li>
                                            <li><a href="inflight-entertainment.html">Inflight Entertainment</a></li>
                                            <li><a href="inflight-magazine.html">Inflight Magazine "Inzozi"</a></li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fi fi-rr-angle-small-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>


                                </ul>
                            </li>


                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">DreamMiles <i
                                        class="fi fi-rr-angle-small-down"></i> </a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>Discover</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="about-dreammiles.html">About DreamMiles</a></li>
                                            <li><a href="tiers-benefits.html">Tiers & Benefits</a></li>
                                            <li><a href="family-program.html">Family Program</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                            <li><a href="partnership.html">Partners</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Redeem</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="earn-miles.html">Earn Miles</a></li>
                                            <li><a href="claim-missing-miles.html">Claim Missing Miles</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Spend</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="spend-miles.html">Spend your miles</a></li>
                                            <li><a href="upgrade-airport.html">Upgrade at the airport</a></li>
                                        </div>
                                        <br><br>
                                        <h3>Other</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="global-wallet.html">Global Wallet</a></li>
                                        </div>
                                    </div>


                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Unlock Exclusive Privileges.</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>

                                </ul>
                            </li>

                            <li class="desktop-main-links-visible">
                                <a href="" data-aos="" class="question-link">Help <i
                                        class="fi fi-rr-angle-small-down"></i>
                                </a>
                                <ul class="desktop-main-links-invisible">
                                    <div class="dropdown-links-columns">
                                        <h3>My Trip</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="help-center.html">Change Flight</a></li>
                                            <li><a href="help-center.html">Cancellation & Refund</a></li>
                                            <li><a href="help-center.html">Lost and found</a></li>
                                            <li><a href="help-center.html">Travel Alerts</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>FAQs</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="help-center.html">Travel Requirements</a></li>
                                            <li><a href="help-center.html">Travel Insurance</a></li>
                                            <li><a href="help-center.html">Covid - 19</a></li>
                                            <li><a href="help-center.html">Codeshare Partners</a></li>
                                            <li><a href="help-center.html">Medical Information</a></li>
                                            <li><a href="help-center.html">Unaccompanied Minors</a></li>
                                            <li><a href="help-center.html">Infant & Toddlers</a></li>
                                            <li><a href="help-center.html">Expectant Mothers</a></li>
                                            <li><a href="help-center.html">Reduced Mobility</a></li>
                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns">
                                        <h3>Contact Us</h3>
                                        <div class="dropdown-links-style">
                                            <li><a href="mailto:reservations@rwandair.com">Reservations :
                                                    reservations@rwandair.com</a></li>
                                            <li><a href="mailto:DreamMiles@rwandair.com">DreamMiles :
                                                    DreamMiles@rwandair.com</a></li>
                                            <li><a href="mailto:Cargo@rwandair.com">Cargo: Cargo@rwandair.com</a></li>
                                            <li><a href="mailto:customerrelations@rwandair.com">Customer relations:
                                                    customerrelations@rwandair.com</a></li>
                                            <li><a href="mailto:Lostandfound@rwandair.com">Lost and found:
                                                    Lostandfound@rwandair.com</a></li>
                                            <li><a href="mailto:Invoices@rwandair.com">Invoice:
                                                    Invoices@rwandair.com</a>
                                            </li>

                                        </div>
                                    </div>

                                    <div class="dropdown-links-columns pic-megamenu">

                                        <ol>
                                            <li class="dreammiles_rewards">
                                                <a class="nav-link text-secondary" href="about-dreammiles.html">
                                                    <img src="{{asset('assets/site/images/dreammiles-card.png')}}"
                                                         alt="dreammiles">
                                                    <div class="dreamiles_rewards_content">
                                                        <h2>Give Feedback</h2>
                                                        <p> Welcome to Dreammiles, where exclusive privileges await.</p>
                                                        <span>
                                                            <i class="fa fa-angle-right"></i>
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </header><!-- #header -->

        <section>

            <div class="home-slider-form-wrapper">

                <div class="home-slider-wrapper" data-aos="">
                    <ul class="bxslider">
                        <li>
                            <img src="{{asset('assets/site/images/slider_banner.jpg')}}"/>
                            <div class="bx-caption hm-bx-caption">
                                <!--<div class="display-caption">-->
                                <!--    <div class="slider-vertical">-->
                                <h1 data-aos="">Enjoy More Convenience with <br> 6 weekly nonstop flights</h1>
                                <p data-aos="">Starting 28 October</p>
                                <a href="" data-aos="">Learn More</a>
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
                            <a href="{{url("#destination.html")}}">
                                <figure><img src="{{asset('assets/site/images/book-hotels.png')}}"></figure>
                                <div class="plan-trip-caption">
                                    <p>Book Hotels</p>
                                    <i class="fi fi-sr-plus"></i>
                                </div>
                            </a>
                        </li>

                        <li data-aos="">
                            <a href="{{url('#travel-requirements.html')}}">
                                <figure><img src="{{asset('assets/site/images/book-cars.png')}}"></figure>
                                <div class="plan-trip-caption">
                                    <p>Book Cars</p>
                                    <i class="fi fi-sr-plus"></i>
                                </div>
                            </a>
                        </li>

                        <li data-aos="">
                            <a href="{{url('#special-assistance.html')}}">
                                <figure><img src="{{asset('assets/site/images/book-tours.png')}}"></figure>
                                <div class="plan-trip-caption">
                                    <p>Book Tours</p>
                                    <i class="fi fi-sr-plus"></i>
                                </div>
                            </a>
                        </li>

                        <li data-aos="">
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
                    <h2 data-aos="">Discover your next trip</h2>
                    <div class="sustainability-sponsors">
                        <ul>
                            <li data-aos="">
                                <figure><img src="{{asset('assets/site/images/sustainability-corporate.jpg')}}">
                                </figure>
                                <div class="media-center-caption">
                                    <div class="entry-space">
                                        <h3>Entry Requirement</h3>

                                        <p>The information below is dynamic and may change anytime on short notice.
                                            Therefore,
                                            we recommend...</p>
                                    </div>


                                    <a href=""><span>Travel Requirement</span><i class="fi fi-rr-angle-right"></i></a>
                                </div>

                            </li>

                            <li data-aos="">
                                <figure><img src="{{asset('assets/site/images/sustainability-sponsorship.jpg')}}" alt="ticket flexibilty">
                                </figure>
                                <div class="media-center-caption">
                                    <div class="entry-space">
                                        <h3>Ticket Flexibility</h3>

                                        <p>RwandAir flexible policies on rebooking, cancellations and refunds...</p>
                                    </div>
                                    <a href=""><span>Discover More</span><i class="fi fi-rr-angle-right"></i></a>
                                </div>
                            </li>

                            <li data-aos="">
                                <figure><img src="{{asset('assets/site/images/sustainability-tender.jpg')}}"></figure>
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
                            <ul id="other_offers">
                            </ul>
                        </div>

                        <div class="view-more-offers" data-aos=""><p>*Prices, including all taxes, fees and surcharges,
                                may
                                vary and are intended to guide your selection.</p><a href="">View More Offers</a></div>
                    </div>
                </div>

            </div>

            <div class="home-offers-slider home-dreammiles-slide">
                <ul class="">

                    <li>
                        <img src="{{asset('assets/site/images/home-dreamiles.jpg')}}"/>
                        <div class="container-rigid">
                            <div class="bx-caption" style="padding:0;background-image:none;left: unset;right: unset;">

                                <div class="display-caption">
                                    <div class="slider-vertical">
                                        <div class="dreammiles-caption">
                                            <h3 data-aos="">Experience a world <br> DreamMiles benefits.</h3>
                                            <br>
                                            <p>We reward travelers exclusively for flying with us. Joining is simple</p>
                                            <br>
                                            <a href="dreammiles.html" data-aos="">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>

                </ul>
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
                                            <h3 data-aos="">Plan your Travel on your terms</h3>
                                            <p data-aos="">Plan your travel with ease. seamless booking and more at your
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
                                <figure><img src="{{asset('assets/site/images/home-partnership.jpg')}}"></figure>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </section><!-- #section -->


        <footer>

            <div class="footer-wrapper">
                <div class="container-rigid">
                    <div class="footer-trip-planning-wrapper">
                        <h3>Start planning your next trip</h3>
                        <ul>
                            <li data-aos=""><a href="https://flights.rwandair.com/en/flights-to-africa/"
                                               target="_blank">
                                    <figure><img src="{{asset('assets/site/images/continent-africa.svg')}}"></figure>
                                    <p>Flight to Africa</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos=""><a href="https://flights.rwandair.com/en/flights-to-europe/"
                                               target="_blank">
                                    <figure><img src="{{asset('assets/site/images/continent-europe.svg')}}"></figure>
                                    <p>Flight to Europe</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos=""><a href="https://flights.rwandair.com/en/flights-to-asia/" target="_blank">
                                    <figure><img src="{{asset('assets/site/images/continent-asia.svg')}}"></figure>
                                    <p>Flight to Asia</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos=""><a href="https://flights.rwandair.com/en/flights-to-middleeast/"
                                               target="_blank">
                                    <figure><img src="{{asset('assets/site/images/continent-middle-east.svg')}}">
                                    </figure>
                                    <p>Flight to Middle East</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos=""><a href="https://flights.rwandair.com/en/flights-to-americas/"
                                               target="_blank">
                                    <figure><img src="{{asset('assets/site/images/continent-america.svg')}}"></figure>
                                    <p>Flight to America</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bg-color">

                    <div class="container-rigid">

                        <div class="footer-main-links">
                            <div class="footer-main-links-columns" data-aos="">
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

                            <div class="footer-main-links-columns" data-aos="">
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
                                    <li><a href="https://flights.rwandair.com/en/flights-to-americas/" target="_blank">America</a>
                                    </li>
                                    <li><a href="route-map.html">Route Map</a></li>
                                </ul>
                            </div>

                            <div class="footer-main-links-columns" data-aos="">
                                <h4>Help</h4>
                                <ul>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="help-center.html">FAQs</a></li>
                                    <li><a href="seat.html">Seat Selection</a></li>
                                    <li><a href="special-assistance.html">Special Assistance</a></li>
                                </ul>
                            </div>

                            <div class="footer-main-links-columns" data-aos="">
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
                                            <figure><img src="{{asset('assets/site/images/google-playstore.png')}}">
                                            </figure>
                                        </a></li>
                                    <li><a href="https://apps.apple.com/us/app/rwandair/id1455608534" target="_blank">
                                            <figure><img src="{{asset('assets/site/images/app-store.png')}}"></figure>
                                        </a></li>
                                </ol>
                            </div>

                            <div class="social-apps-columns">
                                <ol>
                                    <li><a href="awards.html">
                                            <figure><img src="{{asset('assets/site/images/skytrax-award.png')}}">
                                            </figure>
                                        </a></li>
                                    <li><a href="awards.html">
                                            <figure><img src="{{asset('assets/site/images/apex-award.png')}}"></figure>
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

    </main><!-- #main -->
@endsection

