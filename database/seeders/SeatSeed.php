<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seat = [
            [
                'header1' => 'Luggage for your Trip',
                'icon1' => 'images/choose-seat-icon.svg',
                'image1' => 'images/choose-seat-banner.jpg',
                'content1' => '<p>Make sure you`ve got enough room for everything you need for your trip</p>',

                'header2' => 'XL Front Row Seats',
                'content2' => '<p>Make sure you`ve got enough room for everything you need for your trip</p>',
                'content3' => ' <ul>
                                <li>
                                    <b><i class="fi fi-tr-circle-heart"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                                <li>
                                    <b><i class="fi fi-rr-arrow-circle-up"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                                <li>
                                    <b><i class="fi fi-rr-interrogation"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                            </ul>',
                'content4' => '<div class="choose-seat-like-column">
                                    <h4>Would you like to see inside our planes</h4>
                                    <b><i class="fi fi-tr-arrow-circle-right"></i><p>A 360 tour of our Boeing 300</p></b>
                                </div>',
                'image2' => 'images/about-seat-banner.jpg',
                'language'=>'en'
            ],
            [
                'header1' => 'Luggage for your Trip',
                'icon1' => 'images/choose-seat-icon.svg',
                'image1' => 'images/choose-seat-banner.jpg',
                'content1' => '<p>Make sure you`ve got enough room for everything you need for your trip</p>',

                'header2' => 'XL Front Row Seats',
                'content2' => '<p>Make sure you`ve got enough room for everything you need for your trip</p>',
                'content3' => ' <ul>
                                <li>
                                    <b><i class="fi fi-tr-circle-heart"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                                <li>
                                    <b><i class="fi fi-rr-arrow-circle-up"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                                <li>
                                    <b><i class="fi fi-rr-interrogation"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                            </ul>',
                'content4' => '<div class="choose-seat-like-column">
                                    <h4>Would you like to see inside our planes</h4>
                                    <b><i class="fi fi-tr-arrow-circle-right"></i><p>A 360 tour of our Boeing 300</p></b>
                                </div>',
                'image2' => 'images/about-seat-banner.jpg',
                'language'=>'fr'
            ],
            [
                'header1' => 'Luggage for your Trip',
                'icon1' => 'images/choose-seat-icon.svg',
                'image1' => 'images/choose-seat-banner.jpg',
                'content1' => '<p>Make sure you`ve got enough room for everything you need for your trip</p>',

                'header2' => 'XL Front Row Seats',
                'content2' => '<p>Make sure you`ve got enough room for everything you need for your trip</p>',
                'content3' => ' <ul>
                                <li>
                                    <b><i class="fi fi-tr-circle-heart"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                                <li>
                                    <b><i class="fi fi-rr-arrow-circle-up"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                                <li>
                                    <b><i class="fi fi-rr-interrogation"></i></b>
                                    <div class="choose-seat-details-lists">
                                        <h3>Choose your seat from $7</h3>
                                        <p>Make sure you`ve got enough room for everything you need for your trip</p>
                                    </div>
                                </li>
                            </ul>',
                'content4' => '<div class="choose-seat-like-column">
                                    <h4>Would you like to see inside our planes</h4>
                                    <b><i class="fi fi-tr-arrow-circle-right"></i><p>A 360 tour of our Boeing 300</p></b>
                                </div>',
                'image2' => 'images/about-seat-banner.jpg',
                'language'=>'cn'
            ],
        ];
        Seat::insert($seat);
    }
}
