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
                        {{--                        <p data-aos="fade-right">When it comes to travel, you should have the flexibility to choose how--}}
                        {{--                            and when you pay for your upcoming trip. With Plan It, you can book now and pay later with a--}}
                        {{--                            fixed monthly fee for purchases of $100 or more when using your eligible, Go to footer note--}}
                        {{--                            American Express Card. Terms apply, Go to footer note.</p>--}}
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
                        <!--<div class="policies-icon"><figure><i class="fi fi-rr-user-lock"></i></figure></div>-->
                        <div class="policies-content">
                            <h3 data-aos="fade-up">{{$payment->title_3}}</h3>
                            {!! $payment->content_2 !!}
                            {{--                            <p data-aos="fade-up">Split up the cost of your trip into monthly installments with a fixed--}}
                            {{--                                monthly fee using your eligible American Express Card. Follow the steps below to use--}}
                            {{--                                Plan It for your upcoming travel:</p>--}}
                            {{--                            <ul>--}}
                            {{--                                <li data-aos="fade-up">Use your eligible American Express Card to pay - for a faster--}}
                            {{--                                    checkout experience, make sure you are logged in to your SkyMiles account and that--}}
                            {{--                                    you have stored your American Express Card.--}}
                            {{--                                </li>--}}
                            {{--                                <li data-aos="fade-up">Choose to pay over 3, 6 or 12 months during checkout on delta.com--}}
                            {{--                                    and please note that plan durations offered may differ based on creditworthiness.--}}
                            {{--                                </li>--}}
                            {{--                                <li data-aos="fade-up">Track the progress of your plan through your American Express--}}
                            {{--                                    account.--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}

                            {{--                            <p>Your plan purchase will typically show on your American Express account within 48 hours--}}
                            {{--                                though it may take up to 5 business days to reflect on your account. For more details--}}
                            {{--                                visit americanexpress.com/planit, opens in a new window.</p>--}}

                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>
@endsection































