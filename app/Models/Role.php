<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function getAllRoles()
    {
        return self::all();
    }

    public static function createRole($roleData)
    {
        return self::create([
            'name' => $roleData['name']
        ]);
    }

    public  static function getRoleById($roleId)
    {
        return self::find($roleId);
    }

    public function updateRole($roleData)
    {
        $this->name = $roleData['name'];
        $this->save();

        return $this;
    }

    public function deleteRole()
    {
        $this->delete();
    }
}
