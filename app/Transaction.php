<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * Get all of the owning transacction models.
     */
    public function transaction()
    {
        return $this->morphTo();
    }
}
