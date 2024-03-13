@extends('layouts.main')
@section('content')
    <section>
        <div class="newsletter-page">
            <div class="newsletter-pop">
                <div class="newsletter">
                    <div class="align-newsletter">
                        <div class="section-title text-center">
                            <h2>Update newsletter preferences</h2>
                            <p>Help us serve you better, and bring you the information most relevant to you, by keeping
                                your preferences up to date.</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Enter your email..." required>
                                <button type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cities-pattern" data-aos="zoom-in">
                <figure><img src="{{asset('images/cities-pattern-lightblue.svg')}}" alt="pattern"></figure>
            </div>
        </div>
    </section><!-- #div -->
@endsection































