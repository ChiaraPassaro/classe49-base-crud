<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    protected $fillable = [
        'sku',
        'name',
        'features',
        'switches',
        'photo',
        'keycaps',
        'price',
        'created_at',
        'updated_at',
    ];
}
