<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id'
        , 'url'
        , 'image'
        , 'status'
        ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //'',
    ];
}
