<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Profile as ProfileResource;
use App\Http\Resources\Argoment as ArgomentResource;

class Education extends JsonResource
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
            'qualifica' => $this->qualifica,
            'descrizione' => $this->descrizione,
            'luogo' => $this->luogo,
            'graduation' => $this->graduation,
            'args' => ArgomentResource::collection($this->whenLoaded('argoments')),
            'profile' =>  new ProfileResource($this->whenLoaded('profile')),
        ];
    }
}
