<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Project as ProjectResource;
use App\Models\Project;

class ProjectController extends Controller
{

    public function getAllProjects(){
        return ProjectResource::collection(Project::all());
    }

    public function detailProject($id){
        return new ProjectResource(Project::find($id)->load('screens'));
    }

}
