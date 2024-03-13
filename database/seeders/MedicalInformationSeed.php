<?php

namespace Database\Seeders;

use App\Models\MedicalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalInformationSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $medical = [
            [
                'title_1' => 'Medical Assistance',
                'short_description' => '<p data-aos="fade-right">We offer you the medical assistance to ensure that your flight
                                    is as comfortable and easy for you</p>',
                'content_1' => '<p data-aos="fade-up">Welcome onboard RwandAir, we are committed to ensuring that all of our
                            passengers have a safe, comfortable, and enjoyable flight. We understand that some
                            passengers may require special assistance due to disabilities, injuries, or other health
                            conditions, and we are here to help. If you or someone you are traveling with requires
                            special assistance, please let us know in advance so that we can make the necessary
                            arrangements while booking on our website, or contact our support team via
                            reservations@rwandair.com, or +250 788 177 000.</p>',
                'content_2' => '<ul>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                        </ul>',
                'banner' => 'images/fleet1.png',
                'icon' => 'images/special-assistance.svg',
                'language'=>'en'
            ],
            [
                'title_1' => 'Medical Assistance',
                'short_description' => '<p data-aos="fade-right">We offer you the medical assistance to ensure that your flight
                                    is as comfortable and easy for you</p>',
                'content_1' => '<p data-aos="fade-up">Welcome onboard RwandAir, we are committed to ensuring that all of our
                            passengers have a safe, comfortable, and enjoyable flight. We understand that some
                            passengers may require special assistance due to disabilities, injuries, or other health
                            conditions, and we are here to help. If you or someone you are traveling with requires
                            special assistance, please let us know in advance so that we can make the necessary
                            arrangements while booking on our website, or contact our support team via
                            reservations@rwandair.com, or +250 788 177 000.</p>',
                'content_2' => '<ul>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li>
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                        </ul>',
                'banner' => 'images/fleet1.png',
                'icon' => 'images/special-assistance.svg',
                'language'=>'fr'
            ],
            [
                'title_1' => 'Medical Assistance',
                'short_description' => '<p data-aos="fade-right">We offer you the medical assistance to ensure that your flight
                                    is as comfortable and easy for you</p>',
                'content_1' => '<p data-aos="fade-up">Welcome onboard RwandAir, we are committed to ensuring that all of our
                            passengers have a safe, comfortable, and enjoyable flight. We understand that some
                            passengers may require special assistance due to disabilities, injuries, or other health
                            conditions, and we are here to help. If you or someone you are traveling with requires
                            special assistance, please let us know in advance so that we can make the necessary
                            arrangements while booking on our website, or contact our support team via
                            reservations@rwandair.com, or +250 788 177 000.</p>',
                'content_2' => '<ul>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li>
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                            <li data-aos="fade-left">
                                <b><i class="fi fi-rs-check-circle"></i></b>
                                <div class="special-assistance-list-details">
                                    <h3>Mobility assistance</h3>
                                    <p>If you have a vision or hearing impairment, we can provide you with special
                                        assistance to help you navigate the airport and board your flight. Our staff is
                                        trained in sign language and other communication methods to help you communicate
                                        with us and other passengers.</p>
                                </div>
                            </li>
                        </ul>',
                'banner' => 'images/fleet1.png',
                'icon' => 'images/special-assistance.svg',
                'language'=>'cn'
            ],
        ];
        MedicalInformation::insert($medical);
    }
}
