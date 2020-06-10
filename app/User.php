<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'bio',
        'profile_picture',
        'active',
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

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function photo_likes()
    {
        return $this->hasManyThrough('App\Photo','App\Like');
    }

    public function shoots()
    {
        return $this->hasMany('App\Shoot');
    }

    public function albums()
    {
        return $this->hasMany('App\Album');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
