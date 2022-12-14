<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'text'
    ];



}
