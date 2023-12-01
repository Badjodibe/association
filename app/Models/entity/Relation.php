<?php

namespace App\Models\entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    protected $fillable = ['entity_name', 'type_relation', 'description', 'date', 'path_to_logo'];

    public function getAllRelation(){
        return self::all();
    }
    public function createRelation($relation){
        return self::create([
            'entity_name' => $relation->entity_name,
            'type_relation' => $relation->type_relation,
            'description' => $relation->description,
            'date'=> $relation->date,
            'path_to_logo' => $relation->path_to_logo
        ]);
    }
    public function getRelationByName($name){
        return self::where('entity_name', $name);
    }

    public function updateRelation($relation){
        $this->update([
            'entity_name' => $relation->entity_name,
            'type_relation' => $relation->type_relation,
            'description' => $relation->description,
            'date'=> $relation->date,
            'path_to_logo' => $relation->path_to_logo
        ]);
    }
}
