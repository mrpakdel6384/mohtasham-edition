<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $fillable = ['name' , 'parent_id'];

    public function child()
    {
        return $this->hasMany(CategoryProduct::class , 'parent_id' , 'id');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
