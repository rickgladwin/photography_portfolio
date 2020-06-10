<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Date;

class ShootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoots')->insert([
            "title"       => "Himalayas May 2, 2018",
            "shoot_date" => "2018-05-02",
            "notes"         => "Second day at this location. See May 1",
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);

        DB::table('shoots')->insert([
            "title"       => "Nebraska September 10, 2016",
            "shoot_date" => "2016-09-10",
            "notes"         => "Used gel filter on Canon",
            "user_id"     => User::all()->first()->id,
            "created_at"  => Date::now(),
            "updated_at"  => Date::now(),
        ]);
    }
}
