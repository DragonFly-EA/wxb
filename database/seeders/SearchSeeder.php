<?php

namespace Database\Seeders;

use App\Models\Search;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $search = [
            [
                'content'=> '<form>

                        <div class="search-input">
                            <h1>Search</h1>
                            <input type="search" placeholder="Search for flight guide, change booking, etc.">
                            <button type="submit">Search</button>
                        </div>
                        <div class="single-fleet-infotainment trending-searches">
                            <h3>Trending Searches</h3>
                            <ul>
                                <li>
                                    <a href="">
                                        <div class="single-fleet-seat-details">
                                            <h3>Transit Visa</h3>
                                            <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                        </div>
                                    </a>

                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Baggage Allowance</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Meal Selection</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>First Class</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Business Class</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Premium Economy</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Flying with pets</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Special Assistance</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Manage Booking</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </form>',
                'language'=>'en',
            ],
            [
                'content'=> '<form>

                        <div class="search-input">
                            <h1>Search</h1>
                            <input type="search" placeholder="Search for flight guide, change booking, etc.">
                            <button type="submit">Search</button>
                        </div>

                        <div class="single-fleet-infotainment trending-searches">
                            <h3>Trending Searches</h3>
                            <ul>

                                <li>
                                    <a href="">
                                        <div class="single-fleet-seat-details">
                                            <h3>Transit Visa</h3>
                                            <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                        </div>
                                    </a>

                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Baggage Allowance</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Meal Selection</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>First Class</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Business Class</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Premium Economy</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Flying with pets</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Special Assistance</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Manage Booking</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </form>',
                'language'=>'fr',
            ],
            [
                'content'=> '<form>

                        <div class="search-input">
                            <h1>Search</h1>
                            <input type="search" placeholder="Search for flight guide, change booking, etc.">
                            <button type="submit">Search</button>
                        </div>

                        <div class="single-fleet-infotainment trending-searches">
                            <h3>Trending Searches</h3>
                            <ul>

                                <li>
                                    <a href="">
                                        <div class="single-fleet-seat-details">
                                            <h3>Transit Visa</h3>
                                            <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                        </div>
                                    </a>

                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Baggage Allowance</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Meal Selection</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>First Class</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Business Class</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Premium Economy</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Flying with pets</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Special Assistance</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                    <div class="single-fleet-seat-details">
                                        <h3>Manage Booking</h3>
                                        <p>Surpass customer expectations of services by continuously improving and innovating products as well as service delivery.</p>
                                    </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </form>',
                'language'=>'cn',
            ]
        ];
        Search::insert($search);
    }
}
