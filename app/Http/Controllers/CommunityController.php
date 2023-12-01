<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entity\Community;
use App\Http\Resources\CommunityRessource as com;

class CommunityController extends Controller
{
    //
     //
     public function getAllCommunities(){
        $community =  Community::getAllCommunities();
        return new Com($community);
    }
    public function getCommunityById($id){
        $community =  Community::getCommunityById($id);
        return new Com($community);
    }
    public function createCommunity($community){
       $response = Community::createCommunity($community);
       // return
    }
    public function updateCommunity($community){
        $community =  Community::updateCommunity($community);
        // retourn
    }
    public function deleteCommunity($id){
        $community =  Community::deleteCommunity($id);
    }
}
