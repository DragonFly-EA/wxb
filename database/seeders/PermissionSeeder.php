<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        //
        $permissions = [
            [
                // about page
                [
                    'display_name' => 'View About Page',
                    'name' => 'view_about_page',
                    'category' => 'About',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'View About English Page',
                    'name' => 'view_about_english_page',
                    'category' => 'About',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'View About French Page',
                    'name' => 'view_about_french_page',
                    'category'=>'About',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'View About Chinese Page',
                    'name' => 'view_about_french_page',
                    'category'=>'About',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'Update About English Page',
                    'name' => 'update_about_english_page',
                    'category'=>'About',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'Update About French Page',
                    'name' => 'update_about_french_page',
                    'category'=>'About',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'Update About Chinese Page',
                    'category'=>'About',
                    'name' => 'update_about_french_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [

                    'display_name' => 'View Baggage Page',
                    'category'=>'Baggage',
                    'name' => 'view_baggage_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'View Baggage English Page',
                    'category'=>'Baggage',
                    'name' => 'view_baggage_english_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'View Baggage French Page',
                    'category'=>'Baggage',
                    'name' => 'view_baggage_french_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'View Baggage Chinese Page',
                    'category'=>'Baggage',
                    'name' => 'view_baggage_french_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [

                    'display_name' => 'Update Baggage English Page',
                    'category'=>'Baggage',
                    'name' => 'update_baggage_english_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [

                    'display_name' => 'Update Baggage French Page',
                    'category'=>'Baggage',
                    'name' => 'update_baggage_french_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'display_name' => 'Update Baggage Chinese Page',
                    'category'=>'Baggage',
                    'name' => 'update_baggage_french_page',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        ];
        Permission::insert($permissions);
    }


}
