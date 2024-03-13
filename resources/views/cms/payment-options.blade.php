@extends('layouts.main')
@section('content')
    <section>
        <div class="payment-options-page">
            <div class="no-banner-style">
                <figure>
                    @if(strpos($payment->banner, "payment/") !== false)
                        <img src="{{asset('').'storage/'.$payment->banner}}">
                    @else
                        <img src="{{asset('').$payment->banner}}">
                    @endif
                </figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">{{$payment->title_1}}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="book-pay-wrapper">
                <div class="container-rigid">
                    <div class="book-pay-title">
                        <h3 data-aos="fade-right">{{$payment->title_2}}</h3>
                        {!! $payment->content_1 !!}
                    </div>
                    <div class="book-pay-lists">
                        <div class="home-plan-trip-wrapper">
                            <ul>
                                <li data-aos="zoom-in">
                                    <a href="">
                                        <figure><img src="images/plan-explore.svg"></figure>
                                        <div class="plan-trip-caption">
                                            <p>Easily choose the available plan duration that works for you</p>
                                            <i class="fi fi-ts-arrow-circle-right"></i>
                                        </div>
                                    </a>
                                </li>

                                <li data-aos="zoom-in">
                                    <a href="{{url('travel-requirements')}}">
                                        <figure><img src="images/plan-requirements.svg"></figure>
                                        <div class="plan-trip-caption">
                                            <p>See exactly what you would pay each month before checking out</p>
                                            <i class="fi fi-ts-arrow-circle-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li data-aos="zoom-in">
                                    <a href="{{url('special-assistance')}}">
                                        <figure><img src="images/plan-care.svg"></figure>
                                        <div class="plan-trip-caption">
                                            <p>Earn rewards the way you usually do</p>
                                            <i class="fi fi-ts-arrow-circle-right"></i>
                                        </div>
                                    </a>
                                </li>

                                <li data-aos="zoom-in">
                                    <a href="{{url('travel-insurance')}}">
                                        <figure><img src="images/plan-insurance.svg"></figure>
                                        <div class="plan-trip-caption">
                                            <p>Easily choose the available plan duration that works for you</p>
                                            <i class="fi fi-ts-arrow-circle-right"></i>
                                        </div>
                                    </a>
                                </li>

                            </ul>


                        </div>
                    </div>
                    <div class="policies-wrapper">
                        <div class="policies-content">
                            <h3 data-aos="fade-up">{{$payment->title_3}}</h3>
                            {!! $payment->content_2 !!}
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>
@endsection































