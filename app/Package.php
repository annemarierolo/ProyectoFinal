<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id'
        , 'tittle'
        , 'image'
        , 'destiny'
        , 'destiny_type'
        , 'ticket_price'
        , 'tickets_total'
        , 'valid_from'
        , 'valid_to'
        , 'content'
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
