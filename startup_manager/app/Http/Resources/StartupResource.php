<?php

namespace App\Http\Resources;

//use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StartupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ID -> ' => $this->resource->id,
            'Naziv startup-a -> ' => $this->resource->naziv,
            'Projektant -> ' => $this->resource->projektant,
            'Godina završetka -> ' => $this->resource->godina
        ];
    }
}
