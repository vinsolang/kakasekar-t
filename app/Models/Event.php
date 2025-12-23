<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['title', 'description', 'images'];
    protected $casts = [
        'images' => 'array', // Laravel automatically decodes JSON to array
    ];
}
