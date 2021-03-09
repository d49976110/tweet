<?php

namespace App;

use App\Tweet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Follow;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'avatar','email', 'password','profile',
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

    public function getAvatarAttribute($value)
    {
        // DD(asset($value ? "/storage/$value":'storage/default.avatar.jpg'));
        return asset($value ?"/storage/$value":'storage/default.avatar.jpg');
    }

    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password']= \Hash::make($password);;
    // }


    public function tweets()
    {
        return $this->hasMany('App\Tweet');
    }

    public function timeline()
    {
        $ids = $this->follows->pluck('id');
        $ids[] = auth()->id();
        // dd($ids);
        return Tweet::whereIn('user_id',$ids)->latest()->get();

    }

    public function allposts()
    {
        return Tweet::all();
    }

    public function path($append="")
    {
        $path = route('profile',$this->username);
        return $append? "{$path}/{$append}" : $path;
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

}
