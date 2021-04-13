<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::updateOrCreate([
            'user_id' => 1,
            'account_no' => 1212340001,
            'account_type' => 'loan',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 1,
            'account_no' => 1222340001,
            'account_type' => 'investment',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 1,
            'account_no' => 1232340001,
            'account_type' => 'current',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 1,
            'account_no' => 1242340001,
            'account_type' => 'savings',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 2,
            'account_no' => 1212340002,
            'account_type' => 'loan',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 2,
            'account_no' => 1222340002,
            'account_type' => 'investment',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 2,
            'account_no' => 1232340002,
            'account_type' => 'current',
            'account_balance' => 530
        ]);

        Account::updateOrCreate([
            'user_id' => 2,
            'account_no' => 1242340002,
            'account_type' => 'savings',
            'account_balance' => 530
        ]);
    }
}
