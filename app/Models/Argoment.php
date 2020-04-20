<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Argoment extends Model
{


    /**
     * Eloquent relationships
     */
    public function education(){
        return $this->belongsTo('App\Models\Education','edu_id');
    }
}
