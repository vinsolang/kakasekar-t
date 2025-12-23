<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'description', 'images'];
    protected $casts = [
        'images' => 'array', // Laravel automatically decodes JSON to array
    ];
}
