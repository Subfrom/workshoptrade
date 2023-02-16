<?php

namespace Database\Seeders;

use App\Models\Coin_wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Coin_walletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coin_wallet::create(
        [
            'coin_id' => 1,
            'amount' => 10,
            'user_id' => 1,
        ]);

        Coin_wallet::create([
            'coin_id' => 2,
            'amount' => 10,
            'user_id' => 2,
        ]);

        Coin_wallet::create([
            'coin_id' => 3,
            'amount' => 10,
            'user_id' => 3,
        ]);

        Coin_wallet::create( [
            'coin_id' => 4,
            'amount' => 10,
            'user_id' => 4,
        ]);
        
        Coin_wallet::create([
            'coin_id' => 1,
            'amount' => 10,
            'user_id' => 5,
        ]);
    }
}
