<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'img',
        'date',
        'featured',
        'active',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function albums()
    {
        return $this->belongsToMany('App\Album');
    }

    public function shoot()
    {
        return $this->belongsTo('App\Shoot');
    }

}
