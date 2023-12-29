<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\entity\Member;
class Security extends Controller
{
    public function createUser(Request $request)
    {
        $newUser = User::createUser([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        // Authentification de l'utilisateur après l'inscription (optionnel)
        #Auth::login($newUser);
        return response()->json($newUser);

    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // L'utilisateur est authentifié
    //         //return response()->json($credentials);

    //         //$member_id = User::getUserIdByEmail($credentials['email']);
    //         $authUser = User::getUserIdByEmail($credentials['email']);
    //         if($credentials['password'] != $authUser->password){
    //             return back()->with('error', 'Mot de passe incorrect!');
    //         }
    //         $currentMember = Member::getMemberbyId($authUser->id);
    //         return $currentMember;
    //     } else {
    //         // Échec de l'authentification
    //         return back()->with('error', 'Identifiants invalides');
    //     }
    // }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'utilisateur est authentifié
            //return response()->json($credentials);

            $member_id = User::getUserIdByEmail($credentials['email']);
            $currentMember = Member::getMemberbyId($member_id);
            return $currentMember;

        } else {
            // Échec de l'authentification
            return Response()->json(["error" => "Identifiants invalides"]);
            // back()->with('error', 'Identifiants invalides');
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(["message"=> "ok"]);
    }

    // public function changePassword(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $user = Auth::user();
    //     if(Auth::attempt($credentials)){
    //         if (Hash::check($request->input('old_password'), $user->password)){
    //             $user->password = Hash::make($request->input('new_password'));
    //             $user->save();
    //             $member = Member::getByUserId($user->id);
    //             return response()->json($member);
    //         } else {
    //             return back()->with('error', 'Ancien mot de passe incorrect');
    //         }
    //     }
    // }
    public function getAllUser(){
        $users = User::getAllUser();
        return response()->json($users);
    }

}
