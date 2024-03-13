@extends('layouts.main')
@section('content')
    <section>
        <div class="search-page">
            <div class="container-rigid">
                <form>
                    <div class="search-input">
                        <h1>Search</h1>
                        <input type="search" id="searches" placeholder="Search for flight guide, change booking, etc.">
                        <button type="button" onclick="searchModal()">Search</button>
                    </div>
                    <div class="single-fleet-infotainment trending-searches" id="my_search" style="display: none">
                        <h3>Searches</h3>
                        <span id="search_content"></span>
                    </div>
                    <div class="single-fleet-infotainment trending-searches">
                        <h3>Trending Searches</h3>
                        <ul>
                            @forelse($terms as $term)
                                <li>
                                    <a href="">
                                        <div class="single-fleet-seat-details">
                                            <h3>{{$term->term}}</h3>
                                        </div>
                                    </a>
                                </li>
                            @empty
                                <li style="width: 100%;text-align: center">
                                    <a href="#">
                                        <div class="single-fleet-seat-details">
                                            <h3>No Trending Searches</h3>
                                        </div>
                                    </a>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- #section -->
@endsection






























