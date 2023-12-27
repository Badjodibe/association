<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entity\Community;
use App\Http\Resources\CommunityRessource as com;

class CommunityController extends Controller
{
    //
     // retourner toutes les communauté
    public function getAllCommunities(){
        $community =  Community::getAllCommunities();
        return response()->json($community);
        #return new Com($community);
    }
    // retourner une communauté par son identifiant
    public function getCommunityById(Request $id){
        $community =  Community::getCommunityById($id);
        return response()->json($community);
    }
    // creer un communauté
    public function createCommunity(Request $community){
       $data = $community->json()->all();
       $data["belongDate"] = now();
       $response = Community::createCommunity($data);
       return response()->json($response);
    }
    public function updateCommunity(Request $community){
        $community = $community->json()->all();
        $community["belongDate"] = now();
        $community =  Community::updateCommunity($community);
        return response()->json($community);
        // retourn
    }
    public function deleteCommunity(Request $id){
        $community_id = $id->json()->all();
        $community =  Community::deleteCommunity($community_id);
        return response()->json($community);
    }
    public function getCommunityByName(Request $name){
        $name = $name->json()->all();
        $community =  Community::getCommunityByName($name);
        return response()->json($community);
    }
}
