@extends('layouts.main')
@section('content')

    <section>

        <div class="choose-seat-page">

            <div class="luggage-trip-icon">
                <div class="container-rigid">
                    <figure>
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

                            @if(strpos($seat->image1, "seat/") !== false)
                                <img src="{{asset('').'storage/'.$seat->image1}}">
                            @else
                                <img src="{{asset('').$seat->image1}}">
                            @endif

                        </figure>

                        <div class="choose-seat-image-caption">
                            <h3>{{$seat->header2}}</h3>
                            {!! $seat->content2 !!}
                            <a href="">See Details</a>
                        </div>

                    </div>

                    <div class="choose-seat-columns choose-seat-details-column">
                        {!! $seat->content3 !!}
                        <div class="choose-seat-like">
                            {!! $seat->content4 !!}
                            <div class="choose-seat-like-column">
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






























