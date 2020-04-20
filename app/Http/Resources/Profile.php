<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Project as ProjectResource;
use App\Http\Resources\Ability as AbilityResource;
use App\Http\Resources\Education as EducationResource;
use App\Http\Resources\Expirience as ExpResource;

class Profile extends JsonResource
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
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'biography' => $this->descrizione,
            'img' => $this->img,
            'email' => $this->email,
            'indirizzo' => $this->indirizzo,
            'tel' => $this->tel,
            'professione' => $this->professione,
            'projects' => ProjectResource::collection($this->whenLoaded('projects')),
            'abilities' => AbilityResource::collection($this->whenLoaded('abilities')),
            'edu' => EducationResource::collection($this->whenLoaded('educations')),
            'exp' => ExpResource::collection($this->whenLoaded('experiences')),
            'git' => $this->git,
            'skype' => $this->skype,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
