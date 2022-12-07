<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'inventory',
        'view_count',
        'image'

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
        return $this->belongsToMany(CategoryProduct::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(ProductAttributeValue::class)->withPivot(['value_id']);
    }

    public function gallery()
    {
        return $this->hasMany(ProductGallery::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
