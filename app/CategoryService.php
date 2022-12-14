<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
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
        return $this->hasMany(CategoryService::class , 'parent_id' , 'id');
    }

    public function parent()
    {
        return $this->belongsTo(CategoryService::class , 'parent_id' , 'id');
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function services(){
      return $this->hasMany(Service::class);
    }
}
