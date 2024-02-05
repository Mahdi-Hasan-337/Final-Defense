<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        // Seed data for members
        DB::table('members')->insert([
            [
                'name' => 'Mahdi Hasan',
                'designation' => '',
                'fb' => '',
                'email' => '',
                'github' => '',
                'image' => '',
                'status' => 'member',
                'visibility' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sandip Chakraborty',
                'designation' => '',
                'fb' => '',
                'email' => '',
                'github' => '',
                'image' => '',
                'status' => 'member',
                'visibility' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arshad Khan Rumman',
                'designation' => '',
                'fb' => '',
                'email' => '',
                'github' => '',
                'image' => '',
                'status' => 'member',
                'visibility' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Seed data for supervisor
            [
                'name' => 'Arafat Habib Quraishi',
                'designation' => "Lecturer\nAdvisor, Leading University Computer Club (LUCC)\nComputer Science & Engineering\nLeading University, Sylhet",
                'fb' => null,
                'email' => null,
                'github' => null,
                'image' => '',
                'status' => 'supervisor',
                'visibility' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Seed data for partner
            [
                'name' => 'Leading University',
                'designation' => 'Kamalbazar, Sylhet, Bangladesh',
                'fb' => null,
                'email' => null,
                'github' => null,
                'image' => '',
                'status' => 'partner',
                'visibility' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
