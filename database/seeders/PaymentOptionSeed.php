<?php

namespace Database\Seeders;

use App\Models\PaymentOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentOptionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $payment = [
            [
                'title_1' => 'Payment Options',
                'title_2' => 'Book Now Pay Later',
                'title_3' => 'How To Use It',
                'banner' => 'images/Bangui_Bay.jpg',
                'content_1' => '<p data-aos="fade-right">When it comes to travel, you should have the flexibility to choose how
                            and when you pay for your upcoming trip. With Plan It, you can book now and pay later with a
                            fixed monthly fee for purchases of $100 or more when using your eligible, Go to footer note
                            American Express Card. Terms apply, Go to footer note.</p>',
                'content_2' => '<p data-aos="fade-up">Split up the cost of your trip into monthly installments with a fixed
                                monthly fee using your eligible American Express Card. Follow the steps below to use
                                Plan It for your upcoming travel:</p>
                            <ul>
                                <li data-aos="fade-up">Use your eligible American Express Card to pay - for a faster
                                    checkout experience, make sure you are logged in to your SkyMiles account and that
                                    you have stored your American Express Card.
                                </li>
                                <li data-aos="fade-up">Choose to pay over 3, 6 or 12 months during checkout on delta.com
                                    and please note that plan durations offered may differ based on creditworthiness.
                                </li>
                                <li data-aos="fade-up">Track the progress of your plan through your American Express
                                    account.
                                </li>
                            </ul>
                            <p>Your plan purchase will typically show on your American Express account within 48 hours
                                though it may take up to 5 business days to reflect on your account. For more details
                                visit americanexpress.com/planit, opens in a new window.</p>',
                'language'=>'en',
            ],
            [
                'title_1' => 'Payment Options',
                'title_2' => 'Book Now Pay Later',
                'title_3' => 'How To Use It',
                'banner' => 'images/Bangui_Bay.jpg',
                'content_1' => '<p data-aos="fade-right">When it comes to travel, you should have the flexibility to choose how
                            and when you pay for your upcoming trip. With Plan It, you can book now and pay later with a
                            fixed monthly fee for purchases of $100 or more when using your eligible, Go to footer note
                            American Express Card. Terms apply, Go to footer note.</p>',
                'content_2' => '<p data-aos="fade-up">Split up the cost of your trip into monthly installments with a fixed
                                monthly fee using your eligible American Express Card. Follow the steps below to use
                                Plan It for your upcoming travel:</p>
                            <ul>
                                <li data-aos="fade-up">Use your eligible American Express Card to pay - for a faster
                                    checkout experience, make sure you are logged in to your SkyMiles account and that
                                    you have stored your American Express Card.
                                </li>
                                <li data-aos="fade-up">Choose to pay over 3, 6 or 12 months during checkout on delta.com
                                    and please note that plan durations offered may differ based on creditworthiness.
                                </li>
                                <li data-aos="fade-up">Track the progress of your plan through your American Express
                                    account.
                                </li>
                            </ul>
                            <p>Your plan purchase will typically show on your American Express account within 48 hours
                                though it may take up to 5 business days to reflect on your account. For more details
                                visit americanexpress.com/planit, opens in a new window.</p>',
                'language'=>'fr',
            ],
            [
                'title_1' => 'Payment Options',
                'title_2' => 'Book Now Pay Later',
                'title_3' => 'How To Use It',
                'banner' => 'images/Bangui_Bay.jpg',
                'content_1' => '<p data-aos="fade-right">When it comes to travel, you should have the flexibility to choose how
                            and when you pay for your upcoming trip. With Plan It, you can book now and pay later with a
                            fixed monthly fee for purchases of $100 or more when using your eligible, Go to footer note
                            American Express Card. Terms apply, Go to footer note.</p>',
                'content_2' => '<p data-aos="fade-up">Split up the cost of your trip into monthly installments with a fixed
                                monthly fee using your eligible American Express Card. Follow the steps below to use
                                Plan It for your upcoming travel:</p>
                            <ul>
                                <li data-aos="fade-up">Use your eligible American Express Card to pay - for a faster
                                    checkout experience, make sure you are logged in to your SkyMiles account and that
                                    you have stored your American Express Card.
                                </li>
                                <li data-aos="fade-up">Choose to pay over 3, 6 or 12 months during checkout on delta.com
                                    and please note that plan durations offered may differ based on creditworthiness.
                                </li>
                                <li data-aos="fade-up">Track the progress of your plan through your American Express
                                    account.
                                </li>
                            </ul>
                            <p>Your plan purchase will typically show on your American Express account within 48 hours
                                though it may take up to 5 business days to reflect on your account. For more details
                                visit americanexpress.com/planit, opens in a new window.</p>',
                'language'=>'cn',
            ]
        ];
        PaymentOption::insert($payment);
    }
}
