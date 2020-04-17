<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Profile as ProfileResource;
use App\Http\Resources\Skill as SkillResource;

class Ability extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'icon' => $this->icon,
            'profile' =>  new ProfileResource($this->whenLoaded('profile')),
            'skills' => SkillResource::collection($this->whenLoaded('skills'))
        ];
    }
}
