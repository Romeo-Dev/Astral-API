<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expirience extends Model
{


    /**
     * Eloquent relationships
     */
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function mansions(){
        return $this->hasMany('App\Models\Mansion','exp_id');
    }
}
