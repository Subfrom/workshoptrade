<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create(
        [
            'money' => 1000,
            'wallet_by' => 1,
        ]);


        Wallet::create( [
            'money' => 1000,
            'wallet_by' => 2,
        ]);

        Wallet::create([
            'money' => 1000,
            'wallet_by' => 3,
        ]);
        
        Wallet::create([
            'money' => 1000,
            'wallet_by' => 4,
        ]);

        Wallet::create([
            'money' => 1000,
            'wallet_by' => 5,
        ]);
    }
}
