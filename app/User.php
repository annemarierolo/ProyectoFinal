<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
//class User extends model
class User extends Authenticatable
=======
class User extends Authenticatable
//class User extends Model
>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function subscriber()
    {
        return $this->hasOne('App\Subscriber');
    }
}
