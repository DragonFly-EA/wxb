@extends('layouts.main')
@section('content')

    <section>

            <div class="sustainability-page">

                <div class="sustainability-banner">
                    <figure data-aos="fade-up">
                        <img src="images/sustainability.jpg">

{{--                        @if(strpos($sustainability->image1, "sustainability/") !== false)--}}
{{--                            <img src="{{asset('').'storage/'.$sustainability->image1}}">--}}
{{--                        @else--}}
{{--                            <img src="{{asset('').$sustainability->image1}}">--}}
{{--                        @endif--}}

                    </figure>
                </div>

                {!! $sustainability->content1 !!}


{{--                <div class="breadcrumbs-wrapper">--}}
{{--                    <div class="container-rigid">--}}
{{--                        <div class="breadcrumbs-list">--}}
{{--                            <ul>--}}
{{--                                <li data-aos="fade-right"><a href="about-us.html"><p>About Us</p><i class="fi fi-rr-angle-small-right"></i></a></li>--}}
{{--                                <li data-aos="fade-right"><a href="fleet.html" class="active-crumb"><p>Sustainability</p></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}




                <div class="sustainability-icon-details">
                    <div class="container-rigid">
                        <div class="sustainability-icon-details-table">

                            {!! $sustainability->content2 !!}


                            {{--                            <div class="sustainability-details">--}}
{{--                                <h1 data-aos="fade-left" style="font-size:20px;">How we contribute to cleaner travel</h1>--}}

{{--                                <p data-aos="fade-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>--}}

{{--                                <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>--}}

{{--                            </div>--}}



                            <!--<div class="sustainability-icon">-->
                            <!--    <figure><img src="images/request-before-flight.svg"></figure>-->
                            <!--</div>-->

                        </div>
                    </div>
                </div>













                <!--<div class="sustainability-sponsors">-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <figure><img src="images/sustainability-corporate.jpg"></figure>-->
                <!--            <h3>Corporate policies</h3>-->

                <!--            <p>RwandAir is one of the fastest growing airlines and operates one of the youngest and state of the art fleet on the African continent</p>-->

                <!--            <a href="fleet.html">Explore our fleet</a>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <figure><img src="images/sustainability-sponsorship.jpg"></figure>-->
                <!--            <h3>Sponsorship</h3>-->

                <!--            <p>The airline, which is also well reputed for an excellent on time performance, reaches out to twenty-two cities in Western, Central, Eastern and Southern Africa, the Middle East, Asia and Europe.</p>-->

                <!--            <a href="fleet.html">Explore our fleet</a>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <figure><img src="images/sustainability-tender.jpg"></figure>-->
                <!--            <h3>Tender notices</h3>-->

                <!--            <p>RwandAir is a member airline of the International Air Transportation Association (IATA) , an EASA,IOSA and ISAGO certified operator.</p>-->

                <!--            <a href="fleet.html">Explore our fleet</a>-->
                <!--        </li>-->

                <!--    </ul>-->
                <!--</div>-->
                <div class="container-rigid">
                <div class="sustainability-policy">
                    <h3 data-aos="fade-left" style="font-size:20px;">Our Sustainability Policy</h3>

                    <ul>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Environment.png"></figure>
                            <h4>Environment</h4>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Governance.png"></figure>
                            <h4>Governance</h4>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Employees.png"></figure>
                            <h4>Employees</h4>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Safety.png"></figure>
                            <h4>Safety</h4>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Customer-focus.png"></figure>
                            <h4>Customer Focus</h4>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Suppliers.png"></figure>
                            <h4>Suppliers</h4>
                        </li>
                        <li data-aos="zoom-in">
                            <figure><img src="images/Shareholders.png"></figure>
                            <h4>Shareholders</h4>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="sustainability-commitment">
                    <div class="container-rigid">

                        <div class="sustainability-lists">
                            <h3 data-aos="fade-left">Our Sustainability Commitment</h3>
                            <p data-aos="fade-left">Rwandair is committed to advancing the Sustainability Development Goals</p>

                            <ul>
                                <li data-aos="zoom-in">
                                    <div class="sustainability-list-bg">
                                        <div class="sustainability-list-title">
                                            <h4>5</h4>
                                            <h5>GENDER <br> EQUALITY</h5>
                                        </div>
                                        <div class="sustainability-list-icon">
                                            <figure><img src="images/sustainability-equality.svg"></figure>
                                        </div>
                                    </div>

                                </li>

                                <li data-aos="zoom-in">
                                    <div class="sustainability-list-bg">
                                        <div class="sustainability-list-title">
                                            <h4>8</h4>
                                            <h5>DECENT WORK AND <br> ECONIMIC GROWTH</h5>
                                        </div>
                                        <div class="sustainability-list-icon">
                                            <figure><img src="images/sustainability-work.svg"></figure>
                                        </div>
                                    </div>

                                </li>

                                <li data-aos="zoom-in">
                                    <div class="sustainability-list-bg">
                                        <div class="sustainability-list-title">
                                            <h4>10</h4>
                                            <h5>RESPONSIBLE <br> INQUALITIES</h5>
                                        </div>
                                        <div class="sustainability-list-icon">
                                            <figure><img src="images/sustainability-inequality.svg"></figure>
                                        </div>
                                    </div>

                                </li>

                                <li data-aos="zoom-in">
                                    <div class="sustainability-list-bg">
                                        <div class="sustainability-list-title">
                                            <h4>11</h4>
                                            <h5>SUSTAINABLE CITIES <br> AND COMMUNITIES</h5>
                                        </div>
                                        <div class="sustainability-list-icon">
                                            <figure><img src="images/sustainability-communities.svg"></figure>
                                        </div>
                                    </div>

                                </li>

                                <li data-aos="zoom-in">
                                    <div class="sustainability-list-bg">
                                        <div class="sustainability-list-title">
                                            <h4>15</h4>
                                            <h5>LIFE <br> ON LAND</h5>
                                        </div>
                                        <div class="sustainability-list-icon">
                                            <figure><img src="images/sustainability-onland.svg"></figure>
                                        </div>
                                    </div>

                                </li>

                                <li data-aos="zoom-in">
                                    <div class="sustainability-list-bg">
                                        <div class="sustainability-list-title">
                                            <h4>17</h4>
                                            <h5>PARTNERSHIPS <br>FOR THE GOALS</h5>
                                        </div>
                                        <div class="sustainability-list-icon">
                                            <figure><img src="images/sustainability-partnerships.svg"></figure>
                                        </div>
                                    </div>

                                </li>


                            </ul>
                        </div>

                    </div>
                </div>


            </div>



        </section><!-- #section -->

@endsection































