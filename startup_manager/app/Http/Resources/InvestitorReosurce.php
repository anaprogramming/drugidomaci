<?php

namespace App\Http\Resources;

//use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvestitorReosurce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray( $request)
    {
        return [
            'ID -> ' => $this->resource->id,
            'Firma -> ' => $this->resource->firma,
            'Godina osnivanja -> ' => $this->resource->godOsnivanja,
            'Website -> ' => $this->resource->website
        ];
    }
}
