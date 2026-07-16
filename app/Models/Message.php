<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * Relationship with Registeruser.
     */
    public function user()
    {
        return $this->belongsTo(Registeruser::class);
    }
}
