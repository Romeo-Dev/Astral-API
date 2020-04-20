<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{


    protected $table = 'educations';
    /**
     * Eloquent relationships
     */
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function argoments(){
        return $this->hasMany('App\Models\Argoment','edu_id');
    }
}
