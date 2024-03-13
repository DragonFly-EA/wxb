<?php

namespace Database\Seeders;

use App\Models\NewsLetterOffers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsLetterOfferSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsletter = [
            [
                'image1' => 'images/Cotonou.jpg',
                'content1' => '<div class="slider-vertical">
                                <h1 data-aos="fade-up">Be among the first<br>to receive our offers</h1>
                            </div>',
                'language'=>'en'
            ],
            [
                'image1' => 'images/Cotonou.jpg',
                'content1' => '<div class="slider-vertical">
                                <h1 data-aos="fade-up">Be among the first<br>to receive our offers</h1>
                            </div>',
                'language'=>'fr'
            ],
            [
                'image1' => 'images/Cotonou.jpg',
                'content1' => '<div class="slider-vertical">
                                <h1 data-aos="fade-up">Be among the first<br>to receive our offers</h1>
                            </div>',
                'language'=>'cn'
            ]
        ];
        NewsLetterOffers::insert();
    }
}
