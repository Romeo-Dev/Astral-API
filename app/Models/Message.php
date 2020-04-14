<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{


    /**
     * Eloquent relationships
     */
    public function profile(){
        return $this->belongsTo('App\Models\Profile');
    }
}
