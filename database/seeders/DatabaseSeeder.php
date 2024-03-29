<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MemberSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            UserSeeder::class,
            MemberSeeder::class,
        ]);
    }
}
