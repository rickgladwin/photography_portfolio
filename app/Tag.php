<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'title',
        'description',
        'active',
    ];

    public function photos()
    {
        return $this->belongsToMany('App\Photo');
    }
}
