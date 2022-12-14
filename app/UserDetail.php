<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        'family',
        'username',
        'city',
        'avatar',
        'address',
        'zipcode',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userAvatar()
    {
        if($this->avatar)
        {
            return $this->avatar;
        }else{
            return "/front/around/img/dashboard/avatar/user07.jpeg";
        }
    }


}
