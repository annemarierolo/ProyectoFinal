<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * Get all of the Packages transactions.
     */
    public function typeTransaction()
    {
        return $this->morphMany('App\Transaction', 'transaction');
    }
}
