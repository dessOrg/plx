<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Property extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category', 'image', 'size', 'description', 'status', 'price', 'address', 'town', 'location', 'bed', 'bath', 'parking',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
