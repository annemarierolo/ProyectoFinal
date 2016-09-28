<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id'
        , 'tittle'
        , 'summary'
        , 'content'
        , 'images'
        , 'date'
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
