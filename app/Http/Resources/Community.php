<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Community extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'country' => $this->country,
            'description' => $this->description,
            'belongDate' => $this->belongDate,
            'members'=> MemberRessource::Collection($this.member)
        ];
    }
}
