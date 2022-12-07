<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class CategoryPortfolio extends Model
{
    use Sluggable;
    protected $fillable = ['name' , 'parent_id','slug','description'];

    public function child()
    {
        return $this->hasMany(CategoryPortfolio::class , 'parent_id' , 'id');
    }


    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>[
                'source'=>'title',
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
