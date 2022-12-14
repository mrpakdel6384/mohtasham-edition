<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
      'title',
      'description',
      'image',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
