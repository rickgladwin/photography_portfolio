<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoot extends Model
{
    protected $fillable = [
        'title',
        'shoot_date',
        'notes',
        'active',
    ];

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
