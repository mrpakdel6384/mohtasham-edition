<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceEstimation extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email'
    ];
}
