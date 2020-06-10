<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Date;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nick Reynolds',
            'phone' => '555-555-5555',
            'email' => 'nick.reynolds@domain.co',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'password' => Hash::make('password'),
            'profile_picture' => 'img/profile.jpg',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Guest',
            'email' => 'info@photography_portfolio.com',
            'password' => Hash::make('password'),
            'profile_picture' => 'img/profile.jpg',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
