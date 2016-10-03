<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{

     use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'name'
        , 'last_name'
        , 'email'
        , 'password'
        , 'phone_number'
        , 'user_type'
        , 'document'
        , 'document_number'
        , 'sex'
        ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
          'password'
        , 'remember_token'
        ,
    ];

    /**
     * Permite obtener el Subscriber (Si existe) del user
     */
    public function subscriber()
    {
        return $this->hasOne('App\Subscriber');
    }

    public function role(){

        return $this->hasRole('');
    }
}
