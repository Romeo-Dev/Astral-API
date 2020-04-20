<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Expirience as ExpResource;

class Mansion extends JsonResource
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
            'mansione' => $this->mansione,
            'sh_desc' => $this->sh_desc,
            'exp' =>  new ExpResource($this->whenLoaded('expirience')),
        ];
    }
}
