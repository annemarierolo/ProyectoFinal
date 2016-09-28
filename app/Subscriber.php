<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'email'
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

    /**
     * Permite obtener el user (Si existe) del Subscriber
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
