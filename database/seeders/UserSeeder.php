<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => 'Amal Coleman',
            'email' => 'met.metus@test.net',
            'password' => bcrypt('12345678'),
            'phone' => '067-933-2251'
            ]
        );
        
        User::create([
            'fullname' => 'Nasim Barlow',
            'email' => 'lorem.donec@test.net',
            'password' => bcrypt('12345678'),
            'phone' => '000-346-2964'
        ]);

        User::create([
            'fullname' => 'August Blankenship',
            'email' => 'odio.vel.est@test.org',
            'password' => bcrypt('12345678'),
            'phone' => '002-513-4972'
        ]);

        User::create([
            'fullname' => 'Barrett Mejia',
            'email' => 'nibh@test.org',
            'password' => bcrypt('12345678'),
            'phone' => '037-498-9455'
        ]);
        
        User::create([
            'fullname' => 'Branden Castaneda',
            'email' => 'integer.tincidunt@test.couk',
            'password' => bcrypt('12345678'),
            'phone' => '012-814-3516'
        ]);
    }
}
