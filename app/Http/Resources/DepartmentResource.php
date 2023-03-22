<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
//            'hospital' => new HospitalResource($this->whenLoaded('hospital')),
//            'doctors' => DoctorResource::collection($this->whenLoaded('doctors')),
            // Diğer alanları buraya ekleyin
        ];
    }
}
