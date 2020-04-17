<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{


    /**
     * Eloquent relationships
     */
    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }
}
