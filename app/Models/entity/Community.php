<?php

namespace App\Models\entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = ['name', 'description', 'belongDate', 'path_to_logo'];

    // Relations
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    // Create
    public static function createCommunity($name, $description, $belongDate, $path_to_logo)
    {
        return self::create([
            'name' => $name,
            'description' => $description,
            'belongDate' => $belongDate,
            'path_to_logo' => $path_to_logo,
        ]);
    }

    // Read
    public static function getAllCommunities()
    {
        return self::all();
    }

    public static function getCommunityById($id)
    {
        return self::findOrFail($id);
    }

    // Update
    public function updateCommunity($name, $description, $belongDate, $path_to_logo)
    {
        $this->update([
            'name' => $name,
            'description' => $description,
            'belongDate' => $belongDate,
            'path_to_logo' => $path_to_logo,
        ]);
    }
    public function getMembersByName($name)
    {
        return $this->members()->where('name', 'like', '%' . $name . '%')->get();
    }
    // Delete
    public function deleteCommunity()
    {
        $this->delete();
    }
}
