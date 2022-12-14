<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;

    protected $guarded = [];

/**
 * @inheritDoc
  */public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>[
                'source'=>'title',
            ]
        ];
    }
    public function child()
    {
        return $this->hasMany(Category::class , 'parent_id' , 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class , 'parent_id' , 'id');
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function contents(){
      return $this->hasMany(Content::class);
    }
}
