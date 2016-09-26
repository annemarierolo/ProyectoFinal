<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get all of the Events transactions.
     */
    public function typeTransaction()
    {
        return $this->morphMany('App\Transaction', 'transaction');
    }
}
