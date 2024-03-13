@extends('layouts.main')
@section('content')
    <section>
        <div class="cookies-page">
            <div class="no-banner-style">
                <figure><img src="{{asset('images/imigongo-new.jpg')}}" alt="{{$accessibility->title}}" loading="lazy"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">{{$accessibility->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rigid">
                <div class="policies-wrapper">
                    {!! $accessibility->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection






























