<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Profile as ProfileResource;
use App\Http\Resources\Tecnology as TecnologyResource;
use App\Http\Resources\Screen as ScreenResource;
use App\Models\Profile;

class Project extends JsonResource
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
            'descrizione' => $this->descrizione,
            'profile' =>  new ProfileResource($this->whenLoaded('profile')),
            'tecnology' => new TecnologyResource($this->tecnology),
            'screens' => ScreenResource::collection($this->whenLoaded('screens'))
        ];
    }
}
