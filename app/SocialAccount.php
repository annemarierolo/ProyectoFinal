<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    //protected $fillable = ['user_id', 'provider_user_id', 'provider'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id'
        , 'provider_user_id'
        , 'provider'
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
     * Establece la relacion con la tabla User
     *
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
