<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id"=> $this->id,
            "title"=> $this->title,
            "property_type"=> [
                "name" => $this->property_type->name
            ],
            "author" => [
                "id" => $this->author->id,
                "name"=> $this->author->name,
            ],
        ];
    }
}
