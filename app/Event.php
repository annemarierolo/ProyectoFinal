<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id'
        , 'type_id'
        , 'status_id'
        , 'valid_from'
        , 'valid_to'
        , 'tickets_total'
        , 'tickets_sold'
        , 'ticket_price'
        , 'address'
        , 'tittle'
        , 'description'
        , 'image'
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
