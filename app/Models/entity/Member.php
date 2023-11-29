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
    public static function createMember($communauteId, $inscriptionDate, $title, $cycle, $biographie, $path_to_photo, $filliere, $nationality)
    {
        return self::create([
            'communaute_id' => $communauteId,
            'inscription_date' => $inscriptionDate,
            'title' => $title,
            'cycle' => $cycle,
            'biographie' => $biographie,
            'path_to_photo' => $path_to_photo,
            'filliere' => $filliere,
            'nationality' => $nationality,
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
    public function updateMember($communauteId, $inscriptionDate, $title, $cycle, $biographie, $path_to_photo, $filliere, $nationality)
    {
        $this->update([
            'communaute_id' => $communauteId,
            'inscription_date' => $inscriptionDate,
            'title' => $title,
            'cycle' => $cycle,
            'biographie' => $biographie,
            'path_to_photo' => $path_to_photo,
            'filliere' => $filliere,
            'nationality' => $nationality,
        ]);
    }
    public static function getByFiliere($filiere)
    {
        return self::where('filliere', $filiere)->get();
    }

    public static function getByNationality($nationality)
    {
        return self::where('nationality', $nationality)->get();
    }

    // Delete
    public function deleteMember()
    {
        $this->delete();
    }
}
