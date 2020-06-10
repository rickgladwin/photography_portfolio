<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            "title"       => "Lake",
            "description" => "",
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('tags')->insert([
            "title"       => "Sunset",
            "description" => "",
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('tags')->insert([
            "title"       => "People",
            "description" => "",
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);
    }
}
