<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Ability as AbilityResource;
use App\Models\Ability;

class AbilityController extends Controller
{
    public function getAbilities(){
        return AbilityResource::collection(Ability::all()->load('profile'));
    }

    public function moreDetails(){
        return AbilityResource::collection(Ability::all()->load('profile', 'skills'));
    }

    public function detailsAbility($id){
        return new AbilityResource(Ability::find($id)->load('profile','skills'));
    }
}
