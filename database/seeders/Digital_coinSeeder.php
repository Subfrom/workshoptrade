<?php

namespace Database\Seeders;

use App\Models\Digital_coin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Digital_coinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Digital_coin::create(
        [
            'name_coin' => 'BTC',
            'price' => 1000
        ]);

        Digital_coin::create(
        [
            'name_coin' => 'ETH',
            'price' => 1000
        ]);

        Digital_coin::create(
        [
            'name_coin' => 'XRP',
            'price' => 1000
        ]);

        Digital_coin::create(
        [
            'name_coin' => 'DOGE',
            'price' => 1000
        ]);
    }
}
