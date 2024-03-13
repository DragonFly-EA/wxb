<?php

namespace Database\Seeders;

use App\Models\Careers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $career = [
            [
                'icon1'=>'images/careers-icon.png',
                'header'=> '<h1 data-aos="fade-right">Experience Award <br> Winning Excellence</h1>',
                'link'=>'<ul>
                    <li data-aos="fade-right"><a href="#"><p>About Us</p><i
                                    class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Careers</p></a></li>
                        </ul>',
                'header1'=>'Become A Part of Rwandair Family',
                'image1'=>'images/plan-insurance.svg',
                'title1'=>'Cabin crew',

                'image2'=>'images/plan-explore.svg',
                'title2'=>'Cockpit crew',

                'image3'=>'images/plan-care.svg',
                'title3'=>'Administrative/ Technical Unit',

                'image4'=>'images/plan-requirements.svg',
                'title4'=>'Newly Graduate / Student',

                'image5'=>'images/dreammiles-slide.jpg',
                'title5'=>'Dreamiles',
                'description'=> '<p data-aos="fade-right">Benefit from app-exclusive offers, personalised
                                            notifications,<br> seamless booking
                                            functions, journey tracking and more.</p>',
                'url'=>'dreammiles.html',
                'content1'=>'<div class="vacant-positions">
                    <div class="vacant-position-item-heading">
                        <ol>
                            <li data-aos="fade-right">Vacant Positions</li>
                            <li data-aos="fade-up">Department</li>
                            <li data-aos="fade-left">Location</li>
                        </ol>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="invisible-vacant-positions">

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-more-vacancies" data-aos="fade-right">
                        <button>View All</button>
                    </div>
                </div>',
                'content2'=> '<div class="know-more">
                    <h3 data-aos="fade-right">Want to know more</h3>
                    <p data-aos="fade-right">Visit our Linkedin Page to learn more about our work culture</p>
                    <div class="know-more-linked">
                        <a href="" data-aos="fade-right">LinkedIn</a>
                    </div>
                </div>',
                'language'=>'en'
            ],
            [
                'icon1'=>'images/careers-icon.png',
                'header'=> '<h1 data-aos="fade-right">Experience Award <br> Winning Excellence</h1>',
                'link'=>'<ul>
                    <li data-aos="fade-right"><a href="#"><p>About Us</p><i
                                    class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Careers</p></a></li>
                        </ul>',
                'header1'=>'Become A Part of Rwandair Family',
                'image1'=>'images/plan-insurance.svg',
                'title1'=>'Cabin crew',

                'image2'=>'images/plan-explore.svg',
                'title2'=>'Cockpit crew',

                'image3'=>'images/plan-care.svg',
                'title3'=>'Administrative/ Technical Unit',

                'image4'=>'images/plan-requirements.svg',
                'title4'=>'Newly Graduate / Student',

                'image5'=>'images/dreammiles-slide.jpg',
                'title5'=>'Dreamiles',
                'description'=> '<p data-aos="fade-right">Benefit from app-exclusive offers, personalised
                                            notifications,<br> seamless booking
                                            functions, journey tracking and more.</p>',
                'url'=>'dreammiles.html',
                'content1'=>'<div class="vacant-positions">
                    <div class="vacant-position-item-heading">
                        <ol>
                            <li data-aos="fade-right">Vacant Positions</li>
                            <li data-aos="fade-up">Department</li>
                            <li data-aos="fade-left">Location</li>
                        </ol>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="invisible-vacant-positions">

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-more-vacancies" data-aos="fade-right">
                        <button>View All</button>
                    </div>
                </div>',
                'content2'=> '<div class="know-more">
                    <h3 data-aos="fade-right">Want to know more</h3>
                    <p data-aos="fade-right">Visit our Linkedin Page to learn more about our work culture</p>
                    <div class="know-more-linked">
                        <a href="" data-aos="fade-right">LinkedIn</a>
                    </div>
                </div>',
                'language'=>'fr'
            ],
            [
                'icon1'=>'images/careers-icon.png',
                'header'=> '<h1 data-aos="fade-right">Experience Award <br> Winning Excellence</h1>',
                'link'=>'<ul>
                    <li data-aos="fade-right"><a href="#"><p>About Us</p><i
                                    class="fi fi-rr-angle-small-right"></i></a></li>
                            <li data-aos="fade-right"><a href="#" class="active-crumb"><p>Careers</p></a></li>
                        </ul>',
                'header1'=>'Become A Part of Rwandair Family',
                'image1'=>'images/plan-insurance.svg',
                'title1'=>'Cabin crew',

                'image2'=>'images/plan-explore.svg',
                'title2'=>'Cockpit crew',

                'image3'=>'images/plan-care.svg',
                'title3'=>'Administrative/ Technical Unit',

                'image4'=>'images/plan-requirements.svg',
                'title4'=>'Newly Graduate / Student',

                'image5'=>'images/dreammiles-slide.jpg',
                'title5'=>'Dreamiles',
                'description'=> '<p data-aos="fade-right">Benefit from app-exclusive offers, personalised
                                            notifications,<br> seamless booking
                                            functions, journey tracking and more.</p>',
                'url'=>'dreammiles.html',
                'content1'=>'<div class="vacant-positions">
                    <div class="vacant-position-item-heading">
                        <ol>
                            <li data-aos="fade-right">Vacant Positions</li>
                            <li data-aos="fade-up">Department</li>
                            <li data-aos="fade-left">Location</li>
                        </ol>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>
                    <div class="vacant-position-item">
                        <ul>
                            <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                Reporting)</a></li>
                            <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                Employee</a></li>
                            <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                        </ul>
                    </div>

                    <div class="invisible-vacant-positions">

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>

                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                        <div class="vacant-position-item">
                            <ul>
                                <li data-aos="fade-right"><a href="#">Take-Off Sr. (Audit and Financial
                                    Reporting)</a></li>
                                <li data-aos="fade-up"><a href="#">Administrative/Technical Unit
                                    Employee</a></li>
                                <li data-aos="fade-left"><a href="#">Rwanda</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-more-vacancies" data-aos="fade-right">
                        <button>View All</button>
                    </div>
                </div>',
                'content2'=> '<div class="know-more">
                    <h3 data-aos="fade-right">Want to know more</h3>
                    <p data-aos="fade-right">Visit our Linkedin Page to learn more about our work culture</p>
                    <div class="know-more-linked">
                        <a href="" data-aos="fade-right">LinkedIn</a>
                    </div>
                </div>',
                'language'=>'cn'
            ],
        ];
        Careers::insert($career);
    }
}
