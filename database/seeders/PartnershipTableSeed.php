<?php

namespace Database\Seeders;

use App\Models\Partnership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnershipTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $partnership = [
            [
                'title_1' => 'Interline Partnership',
                'title_2' => 'Discover the world with our partner Qatar Airways',
                'banner' => 'images/Partnerships.jpg',
                'content' => ' <p data-aos="fade-left">We’re thrilled to announce the expansion of our interline
                                partnership with Qatar Airways, connecting you to 160 destinations combined across the
                                globe including New York, Montreal and Paris through our hubs in Kigali and Doha.</p>

                            <p data-aos="fade-left">The first African airline to achieve the Diamond status in APEX
                                Health Safety, powered by Simplifying</p>

                            <p data-aos="fade-left">Take advantage of our flexible booking options in the strategic
                                partnership and fly with us in greater comfort and style.</p>

                            <p data-aos="fade-left">Experience the highest standards of safety with a 5-star COVID-19
                                Safety Rating from Skytrax for both Qatar Airways and their hub Hamad International
                                Airport, the “Best airport in the Middle East.”</p>

                            <p data-aos="fade-left">Customers of both airlines will benefit from convenient access to
                                more than 65 global codeshare destinations</p>

                            <p data-aos="fade-left">RwandAir’s new Kigali – Doha non-stop flights from December will
                                provide a seamless travel experience connecting Africa to the world</p>

                            <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>',
                'language'=>'en'
            ],
            [
                'title_1' => 'Interline Partnership',
                'title_2' => 'Discover the world with our partner Qatar Airways',
                'banner' => 'images/Partnerships.jpg',
                'content' => ' <p data-aos="fade-left">We’re thrilled to announce the expansion of our interline
                                partnership with Qatar Airways, connecting you to 160 destinations combined across the
                                globe including New York, Montreal and Paris through our hubs in Kigali and Doha.</p>

                            <p data-aos="fade-left">The first African airline to achieve the Diamond status in APEX
                                Health Safety, powered by Simplifying</p>

                            <p data-aos="fade-left">Take advantage of our flexible booking options in the strategic
                                partnership and fly with us in greater comfort and style.</p>

                            <p data-aos="fade-left">Experience the highest standards of safety with a 5-star COVID-19
                                Safety Rating from Skytrax for both Qatar Airways and their hub Hamad International
                                Airport, the “Best airport in the Middle East.”</p>

                            <p data-aos="fade-left">Customers of both airlines will benefit from convenient access to
                                more than 65 global codeshare destinations</p>

                            <p data-aos="fade-left">RwandAir’s new Kigali – Doha non-stop flights from December will
                                provide a seamless travel experience connecting Africa to the world</p>

                            <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>',
                'language'=>'fr'
            ],
            [
                'title_1' => 'Interline Partnership',
                'title_2' => 'Discover the world with our partner Qatar Airways',
                'banner' => 'images/Partnerships.jpg',
                'content' => ' <p data-aos="fade-left">We’re thrilled to announce the expansion of our interline
                                partnership with Qatar Airways, connecting you to 160 destinations combined across the
                                globe including New York, Montreal and Paris through our hubs in Kigali and Doha.</p>

                            <p data-aos="fade-left">The first African airline to achieve the Diamond status in APEX
                                Health Safety, powered by Simplifying</p>

                            <p data-aos="fade-left">Take advantage of our flexible booking options in the strategic
                                partnership and fly with us in greater comfort and style.</p>

                            <p data-aos="fade-left">Experience the highest standards of safety with a 5-star COVID-19
                                Safety Rating from Skytrax for both Qatar Airways and their hub Hamad International
                                Airport, the “Best airport in the Middle East.”</p>

                            <p data-aos="fade-left">Customers of both airlines will benefit from convenient access to
                                more than 65 global codeshare destinations</p>

                            <p data-aos="fade-left">RwandAir’s new Kigali – Doha non-stop flights from December will
                                provide a seamless travel experience connecting Africa to the world</p>

                            <p data-aos="fade-left">LLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>',
                'language'=>'cn'
            ],
        ];
        Partnership::insert($partnership);
    }
}
