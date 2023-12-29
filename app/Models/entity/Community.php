<?php

namespace App\Models\entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $fillable = ['pays','name', 'descriptions', 'belongDate', 'logo', 'community_id'];
    protected $table = 'communities';
    protected $primaryKey = 'community_id';

    // Relations
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    // Create
    public static function createCommunity($community)
    {

        return self::create($community);
    }

    // Read
    public static function getAllCommunities()
    {
        return self::all();
    }

    public static function getCommunityById($community_id)
    {
        return Community::find($community_id);
    }

    public static function getCommunityByName($name)
    {
        return self::where('name', $name)->get();
    }

    // Update
    public static function updateCommunity($community)
    {
        $commu = self::find($community["community_id"]);
        if ($commu) {
            $commu->update($community);
            return $community;
        }
    }
    public static function getMembersByName($name)
    {
        return self::where('name', 'like', '%' . $name . '%')->get();
    }
    // Delete
    public static function deleteCommunity($community_id)
    {
        $commu = self::find($community_id);
        if ($commu) {
            $commu->delete();
            return true;
        }
    }

    
    public function saveImage($data, $path){
        if ($data->hasFile('image') && $data->file('image')->isValid()) {
            $image = $data->file('image');
            $nom = $data->nom. $image->getClientOriginalExtension();
            $path = $image->store('images', $nom, 'media'); // Enregistre l'image dans le dossier 'public/images'
            $go = $path + $nom;
            return self::create($go);
        }
        else{
            return "error";
        }
    }
}
