<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment' , 'approved' , 'parent_id' , 'user_id','commentable_id','commentable_type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function child()
    {
        return $this->hasMany(Comment::class , 'parent_id' , 'id');
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'parent_id' , 'id')->where('approved',1)->latest();
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = str_replace(PHP_EOL , "<br>" , $value);
    }
}
