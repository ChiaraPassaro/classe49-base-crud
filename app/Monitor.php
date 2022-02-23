<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'inches',
        'resolution',
        'frameRate',
        'lightness',
        'photo',
        'price',
        'created_at',
        'updated_at',
    ];
}
