<?php

namespace App\Models\entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\entity\Community;

class Relation extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'logo'];
    protected $table = 'relation';

    public static function getAllRelation(){
        return self::all();
    }
    public static function createRelation($relation){
        return self::create($relation);
    }
    public static function getRelationByName($nom){
        return self::where('nom', $nom);
    }

    public static function updateRelation($relation){
        $this->update($relation);
    }
}
