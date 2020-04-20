<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Education as EducationResource;

class Argoment extends JsonResource {
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
            'tag' => $this->tag,
            'sh_descr' => $this->sh_descr,
            'education' =>  new EducationResource($this->whenLoaded('education')),
        ];
    }
}
