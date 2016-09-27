<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
<<<<<<< HEAD
=======
    /**/
>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    public function user(){
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
=======

>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1
}
