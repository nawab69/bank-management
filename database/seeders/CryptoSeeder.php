<?php

namespace Database\Seeders;

use App\Models\Crypto;
use Illuminate\Database\Seeder;

class CryptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crypto::updateOrCreate([
            "coin_name" => 'Bitcoin',
            "coin_symbol" => 'BTC',
            "default_value"   => 45000,
            "rate" => 1
        ]);
        Crypto::updateOrCreate([
            "coin_name" => 'Litecoin',
            "coin_symbol" => 'LTC',
            "default_value"   => 400,
            "rate" => 1
        ]);
        Crypto::updateOrCreate([
            "coin_name" => 'Ethereum',
            "coin_symbol" => 'ETH',
            "default_value"   => 3000,
            "rate" => 1
        ]);
        Crypto::updateOrCreate([
            "coin_name" => 'USDT',
            "coin_symbol" => 'USDT',
            "default_value"   => 1,
            "rate" => 1
        ]);
        Crypto::updateOrCreate([
        "coin_name" => 'Bitcoin CASH',
        "coin_symbol" => 'BCH',
        "default_value"   => 500,
        "rate" => 1
    ]);
    }
}
