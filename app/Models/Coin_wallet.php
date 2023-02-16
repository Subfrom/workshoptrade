<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin_wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'coin_id',
        'amount',
        'user_id'
    ];
}
