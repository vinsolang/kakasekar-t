<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     use HasFactory;

    protected $fillable = [
        'name',
        'tier_2_5',
        'tier_6_60',
        'tier_61_120',
        'tier_121_600',
        'tier_600_plus',
        'thumbnail'
    ];
}
