@extends('layouts.main')
@section('content')

    <section>
        <div class="faqs-page">
            <div class="no-banner-style">
                <figure>
                    @if(strpos($faqs->image1, "faqs/") !== false)
                        <img src="{{asset('').'storage/'.$faqs->image1}}" alt="{{$faqs->header1}}">
                    @else
                        <img src="{{asset('').$faqs->image1}}" alt="{{$faqs->header1}}">
                    @endif
                </figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">{{$faqs->header1}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! $faqs->content1 !!}
        </div>
    </section>

@endsection































