@extends('layouts.main')
@section('title','Offers')
@section('content')
    <section>
        <div class="offers-page">
            <div class="no-banner-style">
                <figure><img src="{{asset('images/imigongo-new.jpg')}}"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Offers</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dont-miss-offer-wrapper">
                <div class="container-rigid">
                    <div class="dont-miss-dropselect" data-aos="fade-right">
                        <h3>Don't miss our offers</h3>

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
                                                    <li><a href="#">Book Now</a></li>
                                                    <li><a href="{{url('destination')}}">Explore</a></li>
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
                                                    <li><a href="#">Book Now</a></li>
                                                    <li><a href="{{url('destination')}}">Explore</a></li>
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
                                                    <li><a href="#">Book Now</a></li>
                                                    <li><a href="{{url('destination')}}">Explore</a></li>
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
                                                    <li><a href="#">Book Now</a></li>
                                                    <li><a href="{{url('destination')}}">Explore</a></li>
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
                                                    <li><a href="#">Book Now</a></li>
                                                    <li><a href="{{url('destination')}}">Explore</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #section -->

@endsection






























