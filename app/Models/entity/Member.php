<?php

namespace App\Models\entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    protected $fillable = ['communaute_id', 'inscription_date', 'title', 'cycle', 'biographie', 'path_to_photo', 'filliere', 'nationality'];

    // Relations
    public function community()
    {
        return $this->belongsTo(Community::class, 'communaute_id');
    }

    // Create
    public static function createMember($member)
    {
        return self::create([
            'communaute_id' => $menber->communauteId,
            'inscription_date' => $menber->inscriptionDate,
            'title' => $menber->title,
            'cycle' => $menber->cycle,
            'name' => $menber->name,
            'firstname' => $menber->firstname,
            'biographie' => $menber->biographie,
            'path_to_photo' => $menber->path_to_photo,
            'filliere' => $menber->filliere,
            'nationality' => $menber->nationality,
        ]);
    }

    // Read
    public static function getAllMembers()
    {
        return self::all();
    }

    public static function getMemberById($id)
    {
        return self::findOrFail($id);
    }

    // Update
    public function updateMember($member)
    {
        $this->update([
            'communaute_id' => $member->communauteId,
            'inscription_date' => $member->inscriptionDate,
            'title' => $member->title,
            'cycle' => $member->cycle,
            'name' => $member->name,
            'firstname' => $member->firstname,
            'biographie' => $member->biographie,
            'path_to_photo' => $member->path_to_photo,
            'filliere' => $member->filliere,
            'nationality' => $member->nationality,
        ]);
    }
    public static function getByFiliere($filiere)
    {
        return self::where('filliere', $filiere)->get();
    }

    public static function getByName($name)
    {
        return self::where('fistname', $name)->get();
    }

    public static function getCommunityMember($community_id)
    {
        return self::where('community_id', $community_id)->get();
    }

    // Delete
    public function deleteMember()
    {
        $this->delete();
    }
}
