<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        DB::table('users')->insert([
            [
                'name' => 'Team Campus360',
                'email' => 'campusdotcrew@gmail.com',
                'mobile' => '',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'role' => 'admin',
                'active_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Team Campus360',
                'email' => 'member@gmail.com',
                'mobile' => '',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'role' => 'user',
                'active_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
