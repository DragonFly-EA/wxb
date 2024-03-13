<?php

namespace Database\Seeders;

use App\Models\CheckInOnline;
use App\Models\SpecialAssistance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CheckInOnlineSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $check = [
            [
                'header' => 'Checkin Online',
                'header1' => 'Check-in on your mobile or tablet',
                'title1' => 'You just need to save your boarding passes on your device',
                'image1' => 'images/imigongo-new.jpg',
                'banner1' => 'images/about-us-banner.jpg',
                'content1' => "<div class='checkin-lists'>
                <ul>
                    <li>
                        <span><i>1</i></span>
                        <b>
                            <h5>On your mobile or tablet...</h5>
                            <p>Enter rwandair.com or download the App (iOS or Android).</p>
                        </b>
                    </li>

                    <li>
                        <span><i>2</i></span>
                        <b>
                            <h5>Access your booking</h5>
                            <p>Log in, or enter your booking number and the surname of one of the passengers in the Check-in section.</p>
                        </b>
                    </li>

                    <li>
                        <span><i>3</i></span>
                        <b>
                            <h5>Get your boarding passes</h5>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </b>
                    </li>
                </ul>
                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>
            </div>",
                'content2' => '            <div class="checkin-third-title">
                <figure><i class="fi fi-tr-mobile-notch"></i></figure>
                <p>You will also find them in the Boarding cards section on the Volotea App.</p>
            </div>',
                'content3' => "<div class='special-checkin-wrapper'>
                <div class='special-title'>
                    <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                    <b>
                        <h3>Special check-in</h3>
                        <p>Don't worry, under these circumstances printing your boarding pass at the airport won't cost you anything.</p>
                    </b>
                </div>

                <div class='special-checkin-list'>
                    <ul>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                    </ul>
                </div>

                <div class='special-last-paragraph'>
                    <p>We recommend that you arrive at the airport at least 2 and a half hours before the flight, so that you can manage your check-in with time and tranquility.</p>
                </div>
            </div>",
                'language'=>'en'
            ],
            [
                'header' => 'Checkin Online',
                'header1' => 'Check-in on your mobile or tablet',
                'title1' => 'You just need to save your boarding passes on your device',
                'image1' => 'images/imigongo-new.jpg',
                'banner1' => 'images/about-us-banner.jpg',
                'content1' => "<div class='checkin-lists'>
                <ul>
                    <li>
                        <span><i>1</i></span>
                        <b>
                            <h5>On your mobile or tablet...</h5>
                            <p>Enter rwandair.com or download the App (iOS or Android).</p>
                        </b>
                    </li>

                    <li>
                        <span><i>2</i></span>
                        <b>
                            <h5>Access your booking</h5>
                            <p>Log in, or enter your booking number and the surname of one of the passengers in the Check-in section.</p>
                        </b>
                    </li>

                    <li>
                        <span><i>3</i></span>
                        <b>
                            <h5>Get your boarding passes</h5>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </b>
                    </li>
                </ul>
                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>
            </div>",
                'content2' => '            <div class="checkin-third-title">
                <figure><i class="fi fi-tr-mobile-notch"></i></figure>
                <p>You will also find them in the Boarding cards section on the Volotea App.</p>
            </div>',
                'content3' => "<div class='special-checkin-wrapper'>
                <div class='special-title'>
                    <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                    <b>
                        <h3>Special check-in</h3>
                        <p>Don't worry, under these circumstances printing your boarding pass at the airport won't cost you anything.</p>
                    </b>
                </div>

                <div class='special-checkin-list'>
                    <ul>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                    </ul>
                </div>

                <div class='special-last-paragraph'>
                    <p>We recommend that you arrive at the airport at least 2 and a half hours before the flight, so that you can manage your check-in with time and tranquility.</p>
                </div>
            </div>",
                'language'=>'fr'
            ],
            [
                'header' => 'Checkin Online',
                'header1' => 'Check-in on your mobile or tablet',
                'title1' => 'You just need to save your boarding passes on your device',
                'image1' => 'images/imigongo-new.jpg',
                'banner1' => 'images/about-us-banner.jpg',
                'content1' => "<div class='checkin-lists'>
                <ul>
                    <li>
                        <span><i>1</i></span>
                        <b>
                            <h5>On your mobile or tablet...</h5>
                            <p>Enter rwandair.com or download the App (iOS or Android).</p>
                        </b>
                    </li>

                    <li>
                        <span><i>2</i></span>
                        <b>
                            <h5>Access your booking</h5>
                            <p>Log in, or enter your booking number and the surname of one of the passengers in the Check-in section.</p>
                        </b>
                    </li>

                    <li>
                        <span><i>3</i></span>
                        <b>
                            <h5>Get your boarding passes</h5>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </b>
                    </li>
                </ul>
                <h6>(*) If you don't want to choose seats, you can click on “I don't want seats”. We will allocate you seats at random at no additional cost.</h6>
            </div>",
                'content2' => '            <div class="checkin-third-title">
                <figure><i class="fi fi-tr-mobile-notch"></i></figure>
                <p>You will also find them in the Boarding cards section on the Volotea App.</p>
            </div>',
                'content3' => "<div class='special-checkin-wrapper'>
                <div class='special-title'>
                    <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                    <b>
                        <h3>Special check-in</h3>
                        <p>Don't worry, under these circumstances printing your boarding pass at the airport won't cost you anything.</p>
                    </b>
                </div>

                <div class='special-checkin-list'>
                    <ul>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                        <li>
                            <figure><i class='fi fi-sr-mobile-notch'></i></figure>
                            <p>After checking your booking and adding the services you want (seats*, luggage), save your boarding passes on your device.</p>
                        </li>
                    </ul>
                </div>

                <div class='special-last-paragraph'>
                    <p>We recommend that you arrive at the airport at least 2 and a half hours before the flight, so that you can manage your check-in with time and tranquility.</p>
                </div>
            </div>",
                'language'=>'cn'
            ],
        ];
        CheckInOnline::insert($check);
    }
}
