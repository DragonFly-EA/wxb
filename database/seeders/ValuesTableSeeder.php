<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $values = [
            [
                'title'=>'Customer',
                'content'=>'<p>Surpass customer expectations of services by continuously improving and innovating
                                    products as well as service delivery.</p>',
                'icon'=>'<i class="fi fi-ts-earth-americas"></i>',
                'language'=>'en',
            ],
            [
                'title'=>'Safety & Environment',
                'content'=>'<p>Uphold the highest safety and security standards. To work in a manner that protects
                                    the health and well being of the individual, as well the environment.</p>',
                'icon'=>'<i class="fi fi-rr-shield-check"></i>',
                'language'=>'en',
            ],
            [
                'title'=>'Integrity',
                'content'=>'<p>Committed to upholding transparency, honesty, trustworthiness, and general integrity
                                    in dealing with all stakeholders.</p>',
                'icon'=>'<i class="fi fi-rr-user-shield"></i>',
                'language'=>'en',
            ],
            [
                'title'=>'Employees',
                'content'=>'<p>To maintain an inclusive working environment that embraces new ideas, change, respect
                                    for the individual and equal opportunity to realize one’s potential.</p>',
                'icon'=>'<i class="fi fi-rr-users-alt"></i>',
                'language'=>'en',
            ],
            [
                'title'=>'Corporate Social Responsibility',
                'content'=>'<p>To remain sensitive to the social issues affecting the communities the company
                                    operates in.</p>',
                'icon'=>'<i class="fi fi-ts-hands-holding-diamond"></i>',
                'language'=>'en',
            ],
            [
                'title'=>'Profitability & Accountability',
                'content'=>'<p>We are committed to adding value to the shareholder’s wealth by conducting business
                                    profitability</p>',
                'icon'=>'<i class="fi fi-ts-hands-clapping"></i>',
                'language'=>'en',
            ],
            [
                'title'=>'Customer',
                'content'=>'<p>Surpass customer expectations of services by continuously improving and innovating
                                    products as well as service delivery.</p>',
                'icon'=>'<i class="fi fi-ts-earth-americas"></i>',
                'language'=>'fr',
            ],
            [
                'title'=>'Safety & Environment',
                'content'=>'<p>Uphold the highest safety and security standards. To work in a manner that protects
                                    the health and well being of the individual, as well the environment.</p>',
                'icon'=>'<i class="fi fi-rr-shield-check"></i>',
                'language'=>'fr',
            ],
            [
                'title'=>'Integrity',
                'content'=>'<p>Committed to upholding transparency, honesty, trustworthiness, and general integrity
                                    in dealing with all stakeholders.</p>',
                'icon'=>'<i class="fi fi-rr-user-shield"></i>',
                'language'=>'fr',
            ],
            [
                'title'=>'Employees',
                'content'=>'<p>To maintain an inclusive working environment that embraces new ideas, change, respect
                                    for the individual and equal opportunity to realize one’s potential.</p>',
                'icon'=>'<i class="fi fi-rr-users-alt"></i>',
                'language'=>'fr',
            ],
            [
                'title'=>'Corporate Social Responsibility',
                'content'=>'<p>To remain sensitive to the social issues affecting the communities the company
                                    operates in.</p>',
                'icon'=>'<i class="fi fi-ts-hands-holding-diamond"></i>',
                'language'=>'fr',
            ],
            [
                'title'=>'Profitability & Accountability',
                'content'=>'<p>We are committed to adding value to the shareholder’s wealth by conducting business
                                    profitability</p>',
                'icon'=>'<i class="fi fi-ts-hands-clapping"></i>',
                'language'=>'fr',
            ],
            [
                'title'=>'Customer',
                'content'=>'<p>Surpass customer expectations of services by continuously improving and innovating
                                    products as well as service delivery.</p>',
                'icon'=>'<i class="fi fi-ts-earth-americas"></i>',
                'language'=>'cn',
            ],
            [
                'title'=>'Safety & Environment',
                'content'=>'<p>Uphold the highest safety and security standards. To work in a manner that protects
                                    the health and well being of the individual, as well the environment.</p>',
                'icon'=>'<i class="fi fi-rr-shield-check"></i>',
                'language'=>'cn',
            ],
            [
                'title'=>'Integrity',
                'content'=>'<p>Committed to upholding transparency, honesty, trustworthiness, and general integrity
                                    in dealing with all stakeholders.</p>',
                'icon'=>'<i class="fi fi-rr-user-shield"></i>',
                'language'=>'cn',
            ],
            [
                'title'=>'Employees',
                'content'=>'<p>To maintain an inclusive working environment that embraces new ideas, change, respect
                                    for the individual and equal opportunity to realize one’s potential.</p>',
                'icon'=>'<i class="fi fi-rr-users-alt"></i>',
                'language'=>'cn',
            ],
            [
                'title'=>'Corporate Social Responsibility',
                'content'=>'<p>To remain sensitive to the social issues affecting the communities the company
                                    operates in.</p>',
                'icon'=>'<i class="fi fi-ts-hands-holding-diamond"></i>',
                'language'=>'cn',
            ],
            [
                'title'=>'Profitability & Accountability',
                'content'=>'<p>We are committed to adding value to the shareholder’s wealth by conducting business
                                    profitability</p>',
                'icon'=>'<i class="fi fi-ts-hands-clapping"></i>',
                'language'=>'cn',
            ],
        ];
        Value::insert($values);

    }
}
