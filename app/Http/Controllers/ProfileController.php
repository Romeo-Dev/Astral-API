<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile as ProfileResource;
use App\Http\Resources\Tecnology as TecnologyResource;
use App\Models\Profile;
use App\Http\Resources\Project as ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getAllProfiles(){
        return ProfileResource::collection(Profile::all());
    }

    public function loadProfile($id = 1){
        //TODO: Successivamente a questa chiamata verrànno caricati tutte le relazioni ad esso associate
        return new ProfileResource(Profile::find($id));
    }

    public function showProfile($id = 1){
        return new ProfileResource(Profile::find($id));
    }

    public function showProjects($id){
        return new ProfileResource(Profile::find($id)->load('projects.tecnology'));
    }

    public function showTecnologiesByProjects($id){
        $tec = DB::table('tecnologies')
        ->select('tecnologies.id', 'tecnologies.nome', 'tecnologies.logo', DB::raw('count(*) as project_count'))
            ->join('projects', 'tecnologies.id', '=', 'projects.tec_id')
            ->join('profiles','projects.profile_id', '=', 'profiles.id' )
            ->where('profiles.id', '=', $id)
            ->groupBy('tecnologies.nome', 'tecnologies.id', 'tecnologies.logo')
            ->get();
        
        return response()->json(['tecnologies' => $tec]);
    }

    public function projectList($id, $tid){
        return ProjectResource::collection(Project::where([
            ['profile_id', '=', $id],
            ['tec_id', '=', $tid]
        ])->get());
    }

    public function getAbility($id){
        return new ProfileResource(Profile::find($id)->load('abilities.skills'));
    }
}
