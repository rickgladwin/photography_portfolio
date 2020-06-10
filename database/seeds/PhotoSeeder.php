<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Date;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            "title"       => "Nandhaka Pieris",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"         => "img/landscape1.jpg",
            "date"        => "2015-05-01",
            "featured"    => true,
            "shoot_id"    => DB::table('shoots')->where('title', 'Himalayas May 2, 2018')->first()->id,
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('photos')->insert([
            "title"       => "New West Calgary",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"         => "img/landscape2.jpg",
            "date"        => "2016-05-01",
            "featured"    => false,
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('photos')->insert([
            "title"       => "Australian Landscape",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"         => "img/landscape3.jpg",
            "date"        => "2015-02-02",
            "featured"    => false,
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('photos')->insert([
            "title"       => "Halvergate Marsh",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"         => "img/landscape4.jpg",
            "date"        => "2014-04-01",
            "featured"    => true,
            "shoot_id"    => DB::table('shoots')->where('title', 'Nebraska September 10, 2016')->first()->id,
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('photos')->insert([
            "title"       => "Rikkis Landscape",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"         => "img/landscape5.jpg",
            "date"        => "2010-09-01",
            "featured"    => false,
            "shoot_id"    => DB::table('shoots')->where('title', 'Nebraska September 10, 2016')->first()->id,
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('photos')->insert([
            "title"       => "Kiddi Kristjans Iceland",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"         => "img/landscape6.jpg",
            "date"        => "2015-07-21",
            "featured"    => true,
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);
    }
}
