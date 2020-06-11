<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Log;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo_ids = Photo::all(['id'])->pluck('id')->toArray();
        $user_ids = User::all(['id'])->pluck('id')->toArray();
        $total_likes = 73;

        for ($i = 0; $i < $total_likes; $i++) {
            DB::table('likes')->insert([
                "photo_id"   => rand(min($photo_ids), max($photo_ids)),
                "user_id"    => rand(min($user_ids), max($user_ids)),
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ]);
        }
    }
}
