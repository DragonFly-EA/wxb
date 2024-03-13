@extends('layouts.main')
@section('content')
    <section>
        <div class="medical-information-page">
            <div class="single-fleet-banner">
                <div class="container-rigid">
                    <div class="single-fleet-banner-figure">
                        <figure data-aos="fade-left">
                            @if(strpos($medical->banner, "medical/") !== false)
                                <img src="{{asset('').'storage/'.$medical->banner}}" alt="{{$medical->title_1}}">
                            @else
                                <img src="{{asset('').$medical->banner}}" alt="{{$medical->title_1}}">
                            @endif
                        </figure>
                    </div>
                    <div class="single-fleet-banner-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">{{$medical->title_1}}</h1>
                                {!! $medical->short_description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="special-assistance-wrapper">
                    <div class="special-assistance-note">
                        <b data-aos="fade-up"><i class="fi fi-rr-info"></i></b>
                        {!! $medical->content_1 !!}
                    </div>
                    <div class="special-assistance-list">
                        <div class="special-assistance-list-icon">
                            <figure data-aos="fade-right">
                                @if(strpos($medical->icon, "medical/") !== false)
                                    <img src="{{asset('').'storage/'.$medical->icon}}" alt="{{$medical->title_1}}">
                                @else
                                    <img src="{{asset('').$medical->icon}}" alt="{{$medical->title_1}}">
                                @endif
                            </figure>
                        </div>
                        {!! $medical->content_2 !!}
                    </div>
                    <div class="request-special-assistance">
                        <div class="special-request-link">
                            <a href="" data-aos="fade-right">Request Special Assistance</a>
                        </div>
                        <div class="special-help-center">
                            <a href="" data-aos="fade-left">Visit the help center</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #section -->
@endsection































