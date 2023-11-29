<?php

namespace App\Models\ressources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    protected $fillable = ['description', 'mandat'];

    // Relations
    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    // Create
    public static function createSecretaire($communityId, $memberId, $description, $mandat)
    {
        return self::create([
            'community_id' => $communityId,
            'member_id' => $memberId,
            'description' => $description,
            'mandat' => $mandat,
        ]);
    }

    // Read
    public static function getAllSecretaires()
    {
        return self::all();
    }

    public static function getSecretaireById($id)
    {
        return self::findOrFail($id);
    }

    // Update
    public function updateSecretaire($communityId, $memberId, $description, $mandat)
    {
        $this->update([
            'community_id' => $communityId,
            'member_id' => $memberId,
            'description' => $description,
            'mandat' => $mandat,
        ]);
    }

    public static function getSecretaireByCommunityName($communityName)
    {
        return self::whereHas('community', function ($query) use ($communityName) {
            $query->where('name', 'like', '%' . $communityName . '%');
        })->get();
    }

    public static function getMembersBySecretaireIds()
    {
        $secretaireIds = Secretaire::pluck('member_id')->toArray();
        return self::whereIn('id', $secretaireIds)->get();
    }

    // Delete
    public function deleteSecretaire()
    {
        $this->delete();
    }
}
