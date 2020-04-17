<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tecnology as TecnologyResource;
use App\Http\Resources\Project as ProjectResource;
use App\Models\Project;
use App\Models\Tecnology;
use Illuminate\Http\Request;

class TecnologyController extends Controller
{
    public function getTecnologies(){
        return TecnologyResource::collection(Tecnology::all());
    }

    public function showTecnology($id){
        return new TecnologyResource(Tecnology::find($id));
    }

    public function projectByTec($id){
        return ProjectResource::collection(Project::where('tec_id', $id)->get());
    }

}
