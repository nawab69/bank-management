<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin Profile

        Profile::updateOrCreate(['user_id'=> 1]);

        // Create Demo User Profile
        Profile::updateOrCreate(['user_id'=> 2]);

    }
}
