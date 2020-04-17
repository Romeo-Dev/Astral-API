<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{

    protected $table = 'tecnologies';
    /**
     * Eloquent relationships
     */
    public function projectsByTec(){
        return $this->hasMany('App\Models\Project');
    }
}
