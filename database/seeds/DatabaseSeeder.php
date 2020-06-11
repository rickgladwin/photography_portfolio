<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(ShootSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LikeSeeder::class);
    }
}
