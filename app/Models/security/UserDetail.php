<?php

namespace App\Models\security;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserDetail extends Model
{
    protected $fillable = ['username', 'password', 'level'];

    // Relations
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    // Create
    public static function createUserDetail($username, $password, $level, $memberId)
    {
        return self::create([
            'username' => $username,
            'password' => bcrypt($password), // Vous devriez toujours hasher les mots de passe
            'level' => $level,
            'member_id' => $memberId,
        ]);
    }

    // Read
    public static function getAllUserDetail()
    {
        return self::all();
    }

    public static function getUserDetailyById($id)
    {
        return self::findOrFail($id);
    }

    // Update
    public function updateUserDetail($username, $password, $level, $memberId)
    {
        $this->update([
            'username' => $username,
            'password' => bcrypt($password),
            'level' => $level,
            'member_id' => $memberId,
        ]);
    }

    // Delete
    public function deleteUserDetail()
    {
        $this->delete();
    }
}
