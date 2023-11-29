<?php

namespace App\Models\ressources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'dateCreation', 'description'];

    // Relations
    public function administrations()
    {
        return $this->hasMany(Administration::class);
    }

    // Create
    public static function createPost($title, $dateCreation, $description)
    {
        return self::create([
            'title' => $title,
            'dateCreation' => $dateCreation,
            'description' => $description,
        ]);
    }

    // Read
    public static function getAllPosts()
    {
        return self::all();
    }

    public static function getPostById($id)
    {
        return self::findOrFail($id);
    }

    // Update
    public function updatePost($title, $dateCreation, $description)
    {
        $this->update([
            'title' => $title,
            'dateCreation' => $dateCreation,
            'description' => $description,
        ]);
    }

    // Delete
    public function deletePost()
    {
        $this->delete();
    }
}
