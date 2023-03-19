<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HospitalResource extends JsonResource
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
            'departments' => DepartmentResource::collection($this->whenLoaded('departments')),
            'doctors' => DoctorResource::collection($this->whenLoaded('doctors')),
            // Diğer alanları buraya ekleyin
        ];
    }
}
