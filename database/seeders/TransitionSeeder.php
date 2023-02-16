<?php

namespace Database\Seeders;

use App\Models\Transition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transition::create(
        [
            'coin_id' => 1,
            'amount' => 1,
            'user_id' => 1,
            'exchange_id' => 2,
            'price' => 100,
            'status' => 'buy'
        ]);

        Transition::create( [
            'coin_id' => 2,
            'amount' => 1,
            'user_id' => 1,
            'exchange_id' => 2,
            'price' => 100,
            'status' => 'buy'
        ]);

        Transition::create([
            'coin_id' => 3,
            'amount' => 1,
            'user_id' => 1,
            'exchange_id' => 2,
            'price' => 100,
            'status' => 'buy'
        ]);

        Transition::create([
            'coin_id' => 4,
            'amount' => 1,
            'user_id' => 1,
            'exchange_id' => 2,
            'price' => 100,
            'status' => 'buy'
        ]);
    }
}
