<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    
    /**
     * Eloquent relationships
     */
    public function profile(){
        return $this->belongsTo('App\Models\Profile');
    }

    public function tecnology(){
        return $this->belongsTo('App\Models\Tecnology','tec_id');
    }

    public function screens(){
        return $this->hasMany('App\Models\Screen');
    }
}
