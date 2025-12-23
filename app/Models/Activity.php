<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['title', 'description', 'images'];
    protected $casts = [
        'images' => 'array', // Laravel automatically decodes JSON to array
    ];
}
