<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id'
        , 'transaction_id'
        , 'transaction_type'
        , 'status_id'
        , 'date'
        , 'transacction_tickets'
        , 'transacction_amount'
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
