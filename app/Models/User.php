<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use App\Models\entity\Member;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function member(){
        return $this->hasOne(Member::class);
    }
    public function getId()
    {
        return self::getKey();
    }

    public static function createUser($userData)
    {
        $userData['password'] = Hash::make($userData['password']);
        return self::create($userData);
    }

    public static function getUserById($userId)
    {
        return self::find($userId);
    }

    public static function updateUser($userId, $newUserData)
    {
        $user = self::find($userId);
        if ($user) {
            $user->fill($newUserData);
            $user->save();
            return $user;
        }
        return null;
    }

    public static function deleteUser($userId)
    {
        $user = self::find($userId);
        if ($user) {
            $user->delete();
            return true;
        }
        return false;
    }

    public static function getAllUser()
    {
        return self::all();
    }

    public static function getUserByMail($email)
    {
        return self::where('email', $email)->first();
    }
    public static function getUserIdByEmail($email)
    {
    $user = User::where('email', $email)->first();

    if ($user) {
        $userId = $user->id;
        return $userId;
    }

    // Retourner null ou une valeur par défaut si l'e-mail n'est pas trouvé
    return null;
    }
}

