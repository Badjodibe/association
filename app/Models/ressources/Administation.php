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
    public static function createAdministration($administration)
    {
        return self::create([
            'post_id' => $administration->postId,
            'member_id' => $administration->memberId,
            'description' => $administration->description,
            'mandat' => $administration->mandat,
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
    public function getAdministrationByTitle($title){
        $post_id = Post::getIdByTitle($title);
        $members_id = self::where('post_id', $post_id)->member_id;
        return $this->member()->whereIn('member_id', $members_id);
    }

    public function getAdministrationByDate($date){
        $members_id = self::where('duree', $date)->member_id;
        return $this->member()->where('member_id', $members_id);
    }
    // Delete
    public function deleteAdministration()
    {
        $this->delete();
    }
}
