<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveCode extends Model
{
    protected $fillable = [
      'user_id',
      'code',
      'expired_at'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeGenerateCode($query , $user)
    {
        if($code = $this->getAliveCodeForUser($user)){
                $code = $code->code;
        }else{

            do{
                //create code and check it
                $code = mt_rand(1000000,9999999);

            }while($this->checkCodeIsUnique($user,$code));

            $user->activeCode()->create([
                'code'=>$code,
                'expired_at' => now()->addMinutes(10),
            ]);
        }

        return $code;
    }

    private function checkCodeIsUnique($user, int $code)
    {
        return !! $user->activeCode()->where('code',$code)->first();
    }

    public  function scopeVerifyCode($query,$code , $user)
    {
        return !! $user->activeCode()->where('code',$code)->where('expired_at','>' , now())->first();
    }

    private function getAliveCodeForUser($user)
    {
        return $user->activeCode()->where('expired_at' , '>' , now())->first();
    }
}
