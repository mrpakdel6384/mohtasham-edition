<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteRequest extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'status',
        'final'
    ];


    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
