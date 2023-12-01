<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            'communaute_id' => $communauteId,
            'inscription_date' => $inscriptionDate,
            'title' => $title,
            'cycle' => $cycle,
            'biographie' => $biographie,
            'path_to_photo' => $path_to_photo,
            'filliere' => $filliere,
            'nationality' => $nationality,
        ];
    }
}
