@extends('layouts.main')
@section('content')
    <section>
        <div class="booking-page">
            <div class="home-slider-form-wrapper">

                <div class="home-slider-wrapper">
                    <ul class="bxslider">
                        @forelse($sliders->where('position','=','Home Slider') as $slider)
                            <li>
                                <img src="{{asset('').'storage/'.$slider->image}}" alt="{{$slider->title}}"/>
                                <div class="bx-caption">
                                    <div class="display-caption">
                                        <div class="slider-vertical">
                                            <h1 data-aos="fade-right">{{$slider->title}}</h1>
                                            <p data-aos="fade-right">{!! $slider->description !!}</p>
                                            <a href="{{$slider->url}}" data-aos="fade-right">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li>
                                <img src="{{asset('images/Abuja.jpg')}}" alt="Abuja"/>
                                <div class="bx-caption">
                                    <div class="display-caption">
                                        <div class="slider-vertical">
                                            <h1 data-aos="fade-right">Dreamiles</h1>
                                            <p data-aos="fade-right">Benefit from app-exclusive offers, personalised
                                                notifications,<br> seamless
                                                booking functions, journey tracking and more.</p>
                                            <a href="" data-aos="fade-right">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforelse
                    </ul>
                </div>
                @include('includes.flightform')
            </div>
        </div>
    </section><!-- #section -->
@endsection































