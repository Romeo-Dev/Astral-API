<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{


    /**
     * Eloquent relationships
     */
    public function retriveskills()
    {
        return $this->hasMany('App\Models\Skill');
    }
}
