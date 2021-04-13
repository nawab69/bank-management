<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fee::create([
            'key' => 'send',
            'percentage' => 0.5,
            'fixed' => 2,
        ]);
    }
}
