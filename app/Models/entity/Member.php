<?php

namespace App\Models\entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Member extends Model
{
    protected $fillable = ["name", "surnames","community_id", "user_id", "filliere", "belongDate","photo","description", "role_id"];
    protected $table = 'membres';
    // Relations
    public function community()
    {
        return $this->belongsTo(Community::class, 'communaute_id');
    }
    public function user(){
        return $this->belongTo(User::class);
    }
    // Create
    public static function createMember($member)
    {
            return self::create($member);
    }

    // Read
    public static function getAllMembers()
    {
        return self::all();
    }

    public static function getMemberById($member_id)
    {
        return self::where('member_id', $member_id)->get();
    }

    // Update
    public function updateMember($member)
    {
        $this->update($member);
    }
    public static function getByFiliere($filiere)
    {
        return self::where('filliere', $filiere)->get();
    }
    public static function getByUserId($userId)
    {
    return self::where('user_id', $userId)->get();
    }
    public static function getMemberByName($name)
    {
        return Member::where('name', $name)->first();
    }

    public static function getCommunityMember($community_id)
    {
        return Member::where('community_id', $community_id)->get();
    }

    // Delete
    public function deleteMember()
    {
        $this->delete();
    }
}
