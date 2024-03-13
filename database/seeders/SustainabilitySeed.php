<?php

namespace Database\Seeders;

use App\Models\Sustainability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SustainabilitySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sustainability = [
            [
                'image1'=>'images/sustainability.jpg',
                'content1'=> ' <div class="breadcrumbs-wrapper">
                    <div class="container-rigid">
                        <div class="breadcrumbs-list">
                            <ul>
                                <li data-aos="fade-right"><a href="#"><p>About Us</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                                <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Sustainability</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>',
                'content2'=> ' <div class="sustainability-details">
                                <h1 data-aos="fade-left" style="font-size:20px;">How we contribute to cleaner travel</h1>

                                <p data-aos="fade-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>

                                <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>

                            </div>',
                'language'=>'en',
            ],
            [
                'image1'=>'images/sustainability.jpg',
                'content1'=> ' <div class="breadcrumbs-wrapper">
                    <div class="container-rigid">
                        <div class="breadcrumbs-list">
                            <ul>
                                <li data-aos="fade-right"><a href="#"><p>About Us</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                                <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Sustainability</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>',
                'content2'=> ' <div class="sustainability-details">
                                <h1 data-aos="fade-left" style="font-size:20px;">How we contribute to cleaner travel</h1>

                                <p data-aos="fade-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>

                                <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>

                            </div>',
                'language'=>'fr',
            ],
            [
                'image1'=>'images/sustainability.jpg',
                'content1'=> ' <div class="breadcrumbs-wrapper">
                    <div class="container-rigid">
                        <div class="breadcrumbs-list">
                            <ul>
                                <li data-aos="fade-right"><a href="#"><p>About Us</p><i class="fi fi-rr-angle-small-right"></i></a></li>
                                <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Sustainability</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>',
                'content2'=> ' <div class="sustainability-details">
                                <h1 data-aos="fade-left" style="font-size:20px;">How we contribute to cleaner travel</h1>

                                <p data-aos="fade-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>

                                <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>

                            </div>',
                'language'=>'cn',
            ],
        ];
        Sustainability::insert($sustainability);
    }
}
