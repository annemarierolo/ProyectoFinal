<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionsStatus extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'id'
        , 'status_name'
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
