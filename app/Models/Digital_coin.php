<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digital_coin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_coin',
        'price'
    ];
}
