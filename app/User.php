<?php

namespace App;


use App\Notifications\ResetPassword as ResetPasswordNotification;
use App\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','two_factor_type','phone','is_superuser','is_staff'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

/*    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }*/

    public function activeCode()
    {
        return $this->hasMany(ActiveCode::class);
    }

    public function hasTwoFactor($key)
    {
        return auth()->user()->two_factor_type == $key;
    }


    public function hasTwoFactorAuthenticatedEnabled()
    {
        return $this->two_factor_type !== 'off';
    }

    public function hasSmsTwoFactorAuthenticationEnabled(){
        return $this->two_factor_type == 'sms';
    }

    public function isSuperUser()
    {
        return $this->is_superuser;
    }

    public function isStaffUser()
    {
        return $this->is_staff;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return  $this->belongsToMany(Permission::class);
    }

    public function hasRole($roles)
    {
        return !! $roles->intersect($this->roles)->all();
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name' , $permission->name) || $this->hasRole($permission->roles);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function Contents()
    {
        return $this->hasMany(Content::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function userDetail()
    {
        return $this->hasOne(UserDetail::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'leader_id')->withTimestamps();
    }
}
