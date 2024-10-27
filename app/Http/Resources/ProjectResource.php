<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name' => $this->id,
            'description' => $this->id,
            'created_at' => $this->id,
            'due_date' => $this->id,
            'status' => $this->id,
            'image_path' => $this->id,
            'createdBy' => $this->id,
            'updatedBy' => $this->id,
        ];
    }
}
