<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    
    Use Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'view_count',
        'image',
        'link'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


    public function categories()
    {
        return $this->belongsToMany(CategoryPortfolio::class);
    }

    public function gallery()
    {
        return $this->hasMany(PortfolioGallery::class,'');
    }
    
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
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function thumbImage($size)
    {
        $image = explode('/', $this->image);
        $image[5] =  $size."_".$image[5];
        return $image = implode('/',$image);
    }
}
