<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $awards = [
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'en',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'en',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'en',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'fr',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'fr',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'fr',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'cn',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'cn',
            ],
            [
                'title' => "World's Best Business Class Lounge",
                'description' => 'Explore our Lounge',
                'icon' => 'images/skytrax-award.png',
                'banner' => 'images/about-us-banner.jpg',
                'language'=>'cn',
            ],
        ];
        Award::insert($awards);
    }
}
