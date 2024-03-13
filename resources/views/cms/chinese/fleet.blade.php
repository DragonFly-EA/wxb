@extends('layouts.main')
@section('content')
    <section>
        <div class="fleet-page">
            <div class="no-banner-style">
                <figure><img src="images/imigongo-new.jpg"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">

                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Fleet</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="breadcrumbs-wrapper">
                <div class="container-rigid">
                    <div class="breadcrumbs-list">
                        <ul>
                            <li data-aos="fade-right"><a href="{{url('/about')}}"><p>About Us</p><i
                                        class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos="fade-right"><a href="{{url('/fleet')}}" class="active-crumb"><p>Fleet</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-rigid">
                <div class="fleet-lists">
                    <ul>
                        @foreach($fleets as $fleet)
                            <li data-aos="fade-up">
                                <figure><img src="{{asset('').$fleet->banner}}"></figure>
                                <div class="fleet-details">
                                    <div class="fleet-title">
                                        <h3>{{$fleet->title}}</h3>
                                        <h4>Seating Capacity:</h4>
                                    </div>
                                    <div class="fleet-classes-columns">
                                        <div class="fleet-class-column1">
                                            <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>
                                            <b>
                                                <h4>{{$fleet->input_1}}</h4>
                                                <p>{{$fleet->title_1}}</p>
                                            </b>

                                        </div>
                                        <div class="fleet-class-column2">
                                            <figure><i class="fi fi-br-person-seat-reclined"></i></figure>
                                            <b>
                                                <h4>{{$fleet->input_2}}</h4>
                                                <p>{{$fleet->title_2}}</p>
                                            </b>
                                        </div>
                                    </div>
                                    <div class="fleet-ordered-lists">
                                        {!! $fleet->content !!}
                                        <div class="fleet-learn-more"><a href="{{url('/fleet/'.$fleet->slug)}}">Learn More</a></div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

{{--                        <li data-aos="fade-up">--}}
{{--                            <figure><img src="images/fleet2.png"></figure>--}}
{{--                            <div class="fleet-details">--}}
{{--                                <div class="fleet-title">--}}
{{--                                    <h3>One Airbus A330 – 300</h3>--}}
{{--                                    <h4>Seating Capacity:</h4>--}}
{{--                                </div>--}}
{{--                                <div class="fleet-classes-columns">--}}
{{--                                    <div class="fleet-class-column1">--}}
{{--                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>30</h4>--}}
{{--                                            <p>Business Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}
{{--                                    <div class="fleet-class-column2">--}}
{{--                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>244</h4>--}}
{{--                                            <p>Economy Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="fleet-ordered-lists">--}}
{{--                                    <ol>--}}
{{--                                        <li>Cargo Capacity 132.20m³</li>--}}
{{--                                        <li>Overall Length 63.69m</li>--}}
{{--                                        <li>Wingspan 60.30m</li>--}}
{{--                                        <li>Overall Height 17.18m</li>--}}
{{--                                        <li>Cabin Width 5.18m (Inside)</li>--}}
{{--                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>--}}
{{--                                        <li>Max. Takeoff Weight 235t</li>--}}
{{--                                        <li>Cruising Speed / Max. Speed 1062.kph</li>--}}
{{--                                    </ol>--}}
{{--                                    <div class="fleet-learn-more"><a href="single-fleet.html">Learn More</a></div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li data-aos="fade-up">--}}
{{--                            <figure><img src="images/fleet3.png"></figure>--}}
{{--                            <div class="fleet-details">--}}
{{--                                <div class="fleet-title">--}}
{{--                                    <h3>One Airbus A330 – 300</h3>--}}
{{--                                    <h4>Seating Capacity:</h4>--}}
{{--                                </div>--}}
{{--                                <div class="fleet-classes-columns">--}}
{{--                                    <div class="fleet-class-column1">--}}
{{--                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>30</h4>--}}
{{--                                            <p>Business Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}
{{--                                    <div class="fleet-class-column2">--}}
{{--                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>244</h4>--}}
{{--                                            <p>Economy Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="fleet-ordered-lists">--}}
{{--                                    <ol>--}}
{{--                                        <li>Cargo Capacity 132.20m³</li>--}}
{{--                                        <li>Overall Length 63.69m</li>--}}
{{--                                        <li>Wingspan 60.30m</li>--}}
{{--                                        <li>Overall Height 17.18m</li>--}}
{{--                                        <li>Cabin Width 5.18m (Inside)</li>--}}
{{--                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>--}}
{{--                                        <li>Max. Takeoff Weight 235t</li>--}}
{{--                                        <li>Cruising Speed / Max. Speed 1062.kph</li>--}}
{{--                                    </ol>--}}
{{--                                    <div class="fleet-learn-more"><a href="single-fleet.html">Learn More</a></div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li data-aos="fade-up">--}}
{{--                            <figure><img src="images/fleet4.png"></figure>--}}
{{--                            <div class="fleet-details">--}}
{{--                                <div class="fleet-title">--}}
{{--                                    <h3>One Airbus A330 – 300</h3>--}}
{{--                                    <h4>Seating Capacity:</h4>--}}
{{--                                </div>--}}
{{--                                <div class="fleet-classes-columns">--}}
{{--                                    <div class="fleet-class-column1">--}}
{{--                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>30</h4>--}}
{{--                                            <p>Business Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}
{{--                                    <div class="fleet-class-column2">--}}
{{--                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>244</h4>--}}
{{--                                            <p>Economy Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="fleet-ordered-lists">--}}
{{--                                    <ol>--}}
{{--                                        <li>Cargo Capacity 132.20m³</li>--}}
{{--                                        <li>Overall Length 63.69m</li>--}}
{{--                                        <li>Wingspan 60.30m</li>--}}
{{--                                        <li>Overall Height 17.18m</li>--}}
{{--                                        <li>Cabin Width 5.18m (Inside)</li>--}}
{{--                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>--}}
{{--                                        <li>Max. Takeoff Weight 235t</li>--}}
{{--                                        <li>Cruising Speed / Max. Speed 1062.kph</li>--}}
{{--                                    </ol>--}}
{{--                                    <div class="fleet-learn-more"><a href="single-fleet.html">Learn More</a></div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li data-aos="fade-up">--}}
{{--                            <figure><img src="images/fleet5.png"></figure>--}}
{{--                            <div class="fleet-details">--}}
{{--                                <div class="fleet-title">--}}
{{--                                    <h3>One Airbus A330 – 300</h3>--}}
{{--                                    <h4>Seating Capacity:</h4>--}}
{{--                                </div>--}}
{{--                                <div class="fleet-classes-columns">--}}
{{--                                    <div class="fleet-class-column1">--}}
{{--                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>30</h4>--}}
{{--                                            <p>Business Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}
{{--                                    <div class="fleet-class-column2">--}}
{{--                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>244</h4>--}}
{{--                                            <p>Economy Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="fleet-ordered-lists">--}}
{{--                                    <ol>--}}
{{--                                        <li>Cargo Capacity 132.20m³</li>--}}
{{--                                        <li>Overall Length 63.69m</li>--}}
{{--                                        <li>Wingspan 60.30m</li>--}}
{{--                                        <li>Overall Height 17.18m</li>--}}
{{--                                        <li>Cabin Width 5.18m (Inside)</li>--}}
{{--                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>--}}
{{--                                        <li>Max. Takeoff Weight 235t</li>--}}
{{--                                        <li>Cruising Speed / Max. Speed 1062.kph</li>--}}
{{--                                    </ol>--}}
{{--                                    <div class="fleet-learn-more"><a href="single-fleet.html">Learn More</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                            --}}
{{--                        <li data-aos="fade-up">--}}
{{--                            <figure><img src="images/fleet6.png"></figure>--}}
{{--                            <div class="fleet-details">--}}
{{--                                <div class="fleet-title">--}}
{{--                                    <h3>One Airbus A330 – 300</h3>--}}
{{--                                    <h4>Seating Capacity:</h4>--}}
{{--                                </div>--}}
{{--                                <div class="fleet-classes-columns">--}}
{{--                                    <div class="fleet-class-column1">--}}
{{--                                        <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>30</h4>--}}
{{--                                            <p>Business Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}
{{--                                    <div class="fleet-class-column2">--}}
{{--                                        <figure><i class="fi fi-br-person-seat-reclined"></i></figure>--}}
{{--                                        <b>--}}
{{--                                            <h4>244</h4>--}}
{{--                                            <p>Economy Class</p>--}}
{{--                                        </b>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="fleet-ordered-lists">--}}
{{--                                    <ol>--}}
{{--                                        <li>Cargo Capacity 132.20m³</li>--}}
{{--                                        <li>Overall Length 63.69m</li>--}}
{{--                                        <li>Wingspan 60.30m</li>--}}
{{--                                        <li>Overall Height 17.18m</li>--}}
{{--                                        <li>Cabin Width 5.18m (Inside)</li>--}}
{{--                                        <li>Cabin Height 2.38m (Floor to ceiling)</li>--}}
{{--                                        <li>Max. Takeoff Weight 235t</li>--}}
{{--                                        <li>Cruising Speed / Max. Speed 1062.kph</li>--}}
{{--                                    </ol>--}}

{{--                                    <div class="fleet-learn-more"><a href="single-fleet.html">Learn More</a></div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </li>--}}


                    </ul>
                </div>
            </div>
        </div>


    </section><!-- #section -->

@endsection































