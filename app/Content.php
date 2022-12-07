<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
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
     return $this->belongsTo(Category::class);
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


    public function thumbImage($size)
    {
        $image = explode('/', $this->image);
        $image[5] =  $size."_".$image[5];
        return $image = implode('/',$image);
    }

}
