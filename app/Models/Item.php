<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'status',
        'description',
    ];
    protected $casts = [
        'extra_data' => 'array',
    ];

}

