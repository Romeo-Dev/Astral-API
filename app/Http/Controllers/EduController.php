<?php

namespace App\Http\Controllers;

use App\Http\Resources\Education as EducationResource;
use App\Models\Education;
use Illuminate\Http\Request;

class EduController extends Controller
{
    public function getAllEdus(){
        return  EducationResource::collection(Education::all()->load('profile'));
    }

    public function detailsEdu($id){
        return new EducationResource(Education::find($id)->load(['profile','argoments']));
    }
}
