<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RelationRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'entity_name' => $entity_name,
            'type_relation' => $type_relation,
            'description' => $description,
            'date'=> $date,
            'path_to_logo' => $path_to_logo
        ];
    }
}
