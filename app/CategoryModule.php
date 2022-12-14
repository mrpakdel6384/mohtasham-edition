<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModule extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function modules(){
        return $this->hasMany(Module::class);
    }
}
