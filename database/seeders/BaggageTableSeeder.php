<?php

namespace Database\Seeders;

use App\Models\Baggage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaggageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $baggage = [
            [
                'image1'=>"images/choose-seat-icon.svg",
                'content1'=> "<p>Make sure you've got enough room for everything you need for your trip</p> ",
                'title1'=>"Luggage for your Trip",

                'title2'=>"Luggage to check in",
                'content2'=>"<p>Each passenger can checkin up to five pieces of luggage to a maximum of 50kg per passenger</p>",

                'title3'=>" Check in bags weighing 10kg, 20kg, or 25kg",
                'content3'=>"<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",

                'title4'=>"Add bags to your booking up to two and a half hours before your flight departs",
                'content4'=>"<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                      you will have to pay a supplement of $12 per kilo up to a maximum of 32kg.
                      For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                      you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",
                'content5'=>" <div class='checkin-charges-table'>
                                <p>Our charges per bag are</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Weight </th>
                                            <th>On the Website/App</th>
                                            <th>At Check In</th>
                                            <th>At the boarding gate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>

                                        <tr>
                                            <td>20 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>

                                        <tr>
                                            <td>25 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            ",
                'title5'=>' Special baggage',
                'content6'=>' <p>Each passenger can checkin up to five pieces of luggage to a maximum of 50kg per passenger</p>',
                'content7'=>'<div class="luggage-checkin-details-column">
                            <div class="checkin-weight">
                                <h3>Types of special baggage</h3>
                                <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            </div>

                            <div class="checkin-booking">
                                <h3>Upto 32kg per item</h3>
                                <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg. For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            </div>

                        </div>',

                'title6'=>"About the bag price",
                'icon1'=>'<i class="fi fi-rr-info"></i>',
                'content8'=> "<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                    you will have to pay a supplement of $12 per kilo up to a maximum of 32kg.
                    For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                    you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",
                'image2'=>"images/buggage-luggage.svg",


                'icon2'=>'<i class="fi fi-rr-info"></i>',
                'title7'=>'About the bag price',
                'content9'=>'',
                'image3'=>'images/special-baggage.svg',
                'language'=>'en'
            ],
            [
                'image1'=>"images/choose-seat-icon.svg",
                'content1'=> "<p>Make sure you've got enough room for everything you need for your trip</p> ",
                'title1'=>"Luggage for your Trip",

                'title2'=>"Luggage to check in",
                'content2'=>"<p>Each passenger can checkin up to five pieces of luggage to a maximum of 50kg per passenger</p>",

                'title3'=>" Check in bags weighing 10kg, 20kg, or 25kg",
                'content3'=>"<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",

                'title4'=>"Add bags to your booking up to two and a half hours before your flight departs",
                'content4'=>"<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                      you will have to pay a supplement of $12 per kilo up to a maximum of 32kg.
                      For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                      you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",
                'content5'=>" <div class='checkin-charges-table'>
                                <p>Our charges per bag are</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Weight </th>
                                            <th>On the Website/App</th>
                                            <th>At Check In</th>
                                            <th>At the boarding gate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>

                                        <tr>
                                            <td>20 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>

                                        <tr>
                                            <td>25 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            ",
                'title5'=>' Special baggage',
                'content6'=>' <p>Each passenger can checkin up to five pieces of luggage to a maximum of 50kg per passenger</p>',
                'content7'=>'<div class="luggage-checkin-details-column">
                            <div class="checkin-weight">
                                <h3>Types of special baggage</h3>
                                <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            </div>

                            <div class="checkin-booking">
                                <h3>Upto 32kg per item</h3>
                                <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg. For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            </div>

                        </div>',

                'title6'=>"About the bag price",
                'icon1'=>'<i class="fi fi-rr-info"></i>',
                'content8'=> "<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                    you will have to pay a supplement of $12 per kilo up to a maximum of 32kg.
                    For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                    you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",
                'image2'=>"images/buggage-luggage.svg",


                'icon2'=>'<i class="fi fi-rr-info"></i>',
                'title7'=>'About the bag price',
                'content9'=>'',
                'image3'=>'images/special-baggage.svg',
                'language'=>'fr'
            ],
            [
                'image1'=>"images/choose-seat-icon.svg",
                'content1'=> "<p>Make sure you've got enough room for everything you need for your trip</p> ",
                'title1'=>"Luggage for your Trip",

                'title2'=>"Luggage to check in",
                'content2'=>"<p>Each passenger can checkin up to five pieces of luggage to a maximum of 50kg per passenger</p>",

                'title3'=>" Check in bags weighing 10kg, 20kg, or 25kg",
                'content3'=>"<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",

                'title4'=>"Add bags to your booking up to two and a half hours before your flight departs",
                'content4'=>"<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                      you will have to pay a supplement of $12 per kilo up to a maximum of 32kg.
                      For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                      you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",
                'content5'=>" <div class='checkin-charges-table'>
                                <p>Our charges per bag are</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Weight </th>
                                            <th>On the Website/App</th>
                                            <th>At Check In</th>
                                            <th>At the boarding gate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>

                                        <tr>
                                            <td>20 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>

                                        <tr>
                                            <td>25 Kg</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                            <td>From USD 23</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            ",
                'title5'=>' Special baggage',
                'content6'=>' <p>Each passenger can checkin up to five pieces of luggage to a maximum of 50kg per passenger</p>',
                'content7'=>'<div class="luggage-checkin-details-column">
                            <div class="checkin-weight">
                                <h3>Types of special baggage</h3>
                                <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            </div>

                            <div class="checkin-booking">
                                <h3>Upto 32kg per item</h3>
                                <p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg. For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase, you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>
                            </div>

                        </div>',

                'title6'=>"About the bag price",
                'icon1'=>'<i class="fi fi-rr-info"></i>',
                'content8'=> "<p>For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                    you will have to pay a supplement of $12 per kilo up to a maximum of 32kg.
                    For each kilo of excess baggage that exceeds the maximum weight allowed for each suitcase,
                    you will have to pay a supplement of $12 per kilo up to a maximum of 32kg</p>",
                'image2'=>"images/buggage-luggage.svg",


                'icon2'=>'<i class="fi fi-rr-info"></i>',
                'title7'=>'About the bag price',
                'content9'=>'',
                'image3'=>'images/special-baggage.svg',
                'language'=>'cn'
            ]
        ];
         Baggage::insert($baggage);
    }
}
