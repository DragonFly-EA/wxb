@extends('layouts.main')
@section('content')
    <section>
        <div class="special-assistance-page">
            <div class="single-fleet-banner">
                <div class="container-rigid">
                    <div class="single-fleet-banner-figure">
                        <figure data-aos="fade-left">
                            @if(strpos($special->banner, "special/") !== false)
                                <img src="{{asset('').'storage/'.$special->banner}}">
                            @else
                                <img src="{{asset('').$special->banner}}">
                            @endif
                        </figure>
                    </div>
                    <div class="single-fleet-banner-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-right">{{$special->title_1}}</h1>
                                {!! $special->short_description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="special-assistance-wrapper">
                    <div class="special-assistance-note">
                        <b data-aos="fade-up"><i class="fi fi-rr-info"></i></b>
                        {!! $special->content_1 !!}
                    </div>
                    <div class="special-assistance-list">
                        <div class="special-assistance-list-icon">
                            <figure data-aos="fade-right">
                                @if(strpos($special->icon, "special/") !== false)
                                    <img src="{{asset('').'storage/'.$special->icon}}">
                                @else
                                    <img src="{{asset('').$special->icon}}">
                                @endif
                            </figure>
                        </div>
                        {!! $special->content_2 !!}
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





























