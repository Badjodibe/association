<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entity\Member;
use App\Models\entity\Community;
use App\Models\User;
class MemberController extends Controller
{
    
    public function createMember(Request $member){
        $data = $member->json()->all();
        $data["belongDate"] = now();
        $newUser = User::createUser([
            'name' => $member->input('name'),
            'email' => $member->input('email'),
            'password' => $member->input('password'),
        ]);
        if($newUser!=null){
            $id = User::getUserIdByEmail($member->input('email'));
            $data["user_id"] = $id;
            $response = Member::createMember($data);
        }
        return response()->json($response);
    }
    // modifier les informations d'un membre
    public function updateMember(Request $member){
        $response = Member::updateMember($member);
        // response
    }
    // retourner toute les membes de l'association
    public function getAllMembers(){
        $response = Member::getAllMembers();
        return response()->json($response);
    }
    // retourner un membre par son identifiant
    public function getMemberById(Request $id){
        $member_id = $id->json()->all();
        $response = Member::getMemberById($member_id);
        return response()->json($response);
    }
    // retourner un membre par sa fillière
    public function getByFiliere(Request $filliere){
        $filliere = $filliere->json()->all();
        $response = Member::getByFiliere($filliere);
        return response()->json($response);
    }

    public function getMemberByName(Request $name){
        $response = Member::getMemberByName($name);
        return response()->json($response);
    }
    public function getCommunityMember(Request $community){
        $community_id = $community->json()->all();
        $response = Member::getCommunityMember($community_id);
        return response()->json($response);
    }
}
