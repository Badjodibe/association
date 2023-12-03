<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        return [
            'title' => $title,
            'description' => $description,
            'type_document' => $type_document,
            'date_creation'=> $date_creation,
            "document_path" => $document_path, 
            'creator' => $creator
        ];
    }
}
