<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{


    /**
     * Eloquent relationships
     */
    public function ability()
    {
        return $this->belongsTo('App\Models\Ability');
    }
}
