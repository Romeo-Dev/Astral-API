<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    

    /**
     * Eloquent relationships
     */
    public function retriveMessages(){
        return $this->hasMany('App\Models\Message');
    }

    public function experiences(){
        return $this->hasMany('App\Models\Expirience');
    }

    public function projects(){
        return $this->hasMany('App\Models\Project');
    }

    public function educations()
    {
        return $this->hasMany('App\Models\Education');
    }

    public function skills(){
        return $this->hasMany('App\Models\Skill');
    }
}
