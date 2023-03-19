<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
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
            'user' => new UserResource($this->user),
            'hospital' => new HospitalResource($this->hospital),
            'specialties' => SpecialtyResource::collection($this->specialties),
            'departments' => DepartmentResource::collection($this->departments),
            'addresses' => AddressResource::collection($this->addresses),
            'phones' => PhoneResource::collection($this->phones),
            'media' => MediaResource::collection($this->media),
            'type' => $this->type,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
