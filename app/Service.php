<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    Use Sluggable;
    protected $guarded=[];

    /**
    * @inheritDoc
    */
    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>[
                'source'=>'title'
            ]
        ];
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function category(){
     return $this->belongsTo(CategoryService::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get all of the video's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
