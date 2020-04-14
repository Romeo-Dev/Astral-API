<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mansion extends Model
{


    /**
     * Eloquent relationships
     */
    public function expirience(){
        return $this->belongsTo('App\Models\Expirience');
    }
}
