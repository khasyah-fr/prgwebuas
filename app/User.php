<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    public function getAvatarAttribute($value){
        return asset($value ? 'storage/' . $value : 'images/default-avatar.png');
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline(){
//        return Tweet::where('user_id', $this->id)->latest()->get();
        $ids = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $ids)->orWhere('user_id', $this->id)->latest()->paginate(20);
    }

    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($stri=''){
        $path = route('profile', $this->username);

        return $stri ? "{$path}/{$stri}" : "{$path}";
    }
}
