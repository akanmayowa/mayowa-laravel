<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitizenResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'state' => $this->whenLoaded('state'),
            'lga' => $this->whenLoaded('lga'),
            'ward' => $this->whenLoaded('ward'),
            'created_at' => $this->created_at->format('m/d/Y') ?? null,
            'updated_at' => $this->updated_at->format('m/d/Y') ?? null,
        ];
    }
}
