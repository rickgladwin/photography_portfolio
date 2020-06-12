<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Date;

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
        $photo_ids = array_values(array_diff($photo_ids, [2, 7]));
        $user_ids = User::all(['id'])->pluck('id')->toArray();
        $total_likes = 73;

        for ($i = 0; $i < $total_likes; $i++) {
            DB::table('likes')->insert([
                "photo_id"   => $photo_ids[mt_rand(0, sizeof($photo_ids) - 1)],
                "user_id"    => mt_rand(min($user_ids), max($user_ids)),
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ]);
        }
    }
}
