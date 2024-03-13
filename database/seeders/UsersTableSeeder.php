<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'first_name'=>'Nelson',
                'last_name'=>'Sammy',
                'email'=>'nelson@dragonfly.co.ke',
                'password'=>Hash::make('secret'),
                'phone'=>'0719405904',
            ],
            [
                'first_name'=>'Lameck',
                'last_name'=>'Lameck',
                'email'=>'lameck@dragonfly.co.ke',
                'password'=>Hash::make('secret'),
                'phone'=>'0712345678',
            ]
        ];
        User::insert($users);
    }
}
