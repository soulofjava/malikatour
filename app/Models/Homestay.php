<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $guarded = [];

    protected $casts = [
        'gambar' => 'array',
    ];
}
