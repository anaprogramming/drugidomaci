<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvesticijeResource extends JsonResource
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
            'Vrednost investicije -> ' => $this->resource->vrednost,
            'Kreditno finansiranje -> ' => $this->resource->kredit,
            'Investitor -> ' => new InvestitorResource($this->resource->investitor),
            'Startup -> ' => new StartupResource($this->resource->startup)
        ];
    }
}
