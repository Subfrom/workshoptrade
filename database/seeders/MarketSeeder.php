<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Market::create(
        [
            'coin_id' => 1,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 1,
            'status' => 'buy'
        ]);

        Market::create([
            'coin_id' => 2,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 2,
            'status' => 'buy'
        ]);

        Market::create([
            'coin_id' => 3,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 3,
            'status' => 'buy'
        ]);

        Market::create([
            'coin_id' => 4,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 4,
            'status' => 'buy'
        ]);

        Market::create([
            'coin_id' => 1,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 1,
            'status' => 'sell'
        ]);

        Market::create( [
            'coin_id' => 2,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 2,
            'status' => 'sell'
        ]);

        Market::create([
            'coin_id' => 3,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 3,
            'status' => 'sell'
        ]);

        Market::create([
            'coin_id' => 4,
            'amount' => 10,
            'price' => 1000,
            'user_id' => 4,
            'status' => 'sell'
        ]);
    }
}
