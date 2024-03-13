@extends('layouts.main')
@section('content')

    <section>

        <div class="choose-seat-page">

            <div class="luggage-trip-icon">
                <div class="container-rigid">
                    <figure>
                        {{--                            <img src="images/choose-seat-icon.svg">--}}
                        @if(strpos($seat->icon1, "seat/") !== false)
                            <img src="{{asset('').'storage/'.$seat->icon1}}">
                        @else
                            <img src="{{asset('').$seat->icon1}}">
                        @endif

                    </figure>
                    <div class="luggage-trip-title">
                        <h1>{{$seat->header1}}</h1>
                        {!! $seat->content1 !!}

                    </div>
                </div>
            </div>

            <div class="container-rigid">

                <div class="choose-seat-row">

                    <div class="choose-seat-columns choose-seat-image-column">
                        <figure>
                            <img src="images/choose-seat-banner.jpg">

                            {{--                                @if(strpos($seat->image1, "seat/") !== false)--}}
                            {{--                                    <img src="{{asset('').'storage/'.$seat->image1}}">--}}
                            {{--                                @else--}}
                            {{--                                    <img src="{{asset('').$seat->image1}}">--}}
                            {{--                                @endif--}}

                        </figure>

                        <div class="choose-seat-image-caption">
                            <h3>{{$seat->header2}}</h3>

                            {!! $seat->content2 !!}

                            {{--                                <p>Make sure you've got enough room for everything you need for your trip</p>--}}
                            <a href="">See Details</a>
                        </div>

                    </div>

                    <div class="choose-seat-columns choose-seat-details-column">

                        {!! $seat->content3 !!}


                        {{--                            <ul>--}}
                        {{--                                <li>--}}
                        {{--                                    <b><i class="fi fi-tr-circle-heart"></i></b>--}}
                        {{--                                    <div class="choose-seat-details-lists">--}}
                        {{--                                        <h3>Choose your seat from $7</h3>--}}
                        {{--                                        <p>Make sure you've got enough room for everything you need for your trip</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <b><i class="fi fi-rr-arrow-circle-up"></i></b>--}}
                        {{--                                    <div class="choose-seat-details-lists">--}}
                        {{--                                        <h3>Choose your seat from $7</h3>--}}
                        {{--                                        <p>Make sure you've got enough room for everything you need for your trip</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <b><i class="fi fi-rr-interrogation"></i></b>--}}
                        {{--                                    <div class="choose-seat-details-lists">--}}
                        {{--                                        <h3>Choose your seat from $7</h3>--}}
                        {{--                                        <p>Make sure you've got enough room for everything you need for your trip</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}


                        <div class="choose-seat-like">
                            {!! $seat->content4 !!}


                            {{--                                <div class="choose-seat-like-column">--}}
                            {{--                                    <h4>Would you like to see inside our planes</h4>--}}
                            {{--                                    <b><i class="fi fi-tr-arrow-circle-right"></i><p>A 360 tour of our Boeing 300</p></b>--}}
                            {{--                                </div>--}}


                            <div class="choose-seat-like-column">
                                {{--                                    <figure><img src="images/about-seat-banner.jpg"></figure>--}}

                                @if(strpos($seat->image2, "seat/") !== false)
                                    <img src="{{asset('').'storage/'.$seat->image2}}">
                                @else
                                    <img src="{{asset('').$seat->image2}}">
                                @endif


                            </div>
                        </div>
                    </div>

                </div>

                <div class="choose-your-seat">
                    <a href="">Choose your seats</a>
                </div>

            </div>

        </div>


    </section><!-- #section -->

@endsection






























