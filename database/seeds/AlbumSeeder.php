<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use App\User;


class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'title' => 'Default',
            'description' => 'The default album',
            'user_id' => User::all()->first()->id,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);

        DB::table('albums')->insert([
            'title' => 'Water',
            'description' => 'Photos featuring water',
            'user_id' => User::all()->first()->id,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
