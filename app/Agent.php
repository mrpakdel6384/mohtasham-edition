<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
      'name',
      'admin',
      'phone',
      'province',
      'city',
      'address',
      'lng',
      'lat',
    ];
}
