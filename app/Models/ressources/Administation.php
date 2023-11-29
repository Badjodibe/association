<?php

namespace App\Models\ressources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    protected $fillable = ['description', 'mandat'];

    // Relations
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    // Create
    public static function createAdministration($postId, $memberId, $description, $mandat)
    {
        return self::create([
            'post_id' => $postId,
            'member_id' => $memberId,
            'description' => $description,
            'mandat' => $mandat,
        ]);
    }

    // Read
    public static function getAllAdministrations()
    {
        return self::all();
    }

    public static function getAdministrationById($id)
    {
        return self::findOrFail($id);
    }

    // Update
    public function updateAdministration($postId, $memberId, $description, $mandat)
    {
        $this->update([
            'post_id' => $postId,
            'member_id' => $memberId,
            'description' => $description,
            'mandat' => $mandat,
        ]);
    }

    // Delete
    public function deleteAdministration()
    {
        $this->delete();
    }
}
