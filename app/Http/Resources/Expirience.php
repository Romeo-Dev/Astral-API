<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Mansion as MansionResource;

class Expirience extends JsonResource
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
            'ruolo' => $this->ruolo,
            'azienda' => $this->azienda,
            'descrizione' => $this->descrizione,
            'start' => $this->start,
            'end' => $this->end,
            'exp' =>  MansionResource::collection($this->whenLoaded('mansions')),
        ];
    }
}
