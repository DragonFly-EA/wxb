@extends('layouts.main')
@section('content')
    <section>
        <div class="sustainability-page">
            <div class="sustainability-banner">
                <figure data-aos="fade-up">
                    <img src="images/sustainability.jpg">
                </figure>
            </div>
            {!! $sustainability->content1 !!}
            <div class="sustainability-icon-details">
                <div class="container-rigid">
                    <div class="sustainability-icon-details-table">
                        {!! $sustainability->content2 !!}
                    </div>
                </div>
            </div>
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
                        <p data-aos="fade-left">Rwandair is committed to advancing the Sustainability Development
                            Goals</p>

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































