<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entity\Member;

class MemberController extends Controller
{
    //
    public function createMember($member){
        $response = Member::createMember($member);
        // response
    }
    public function updateMember($member){
        $response = Member::updateMember($member);
        // response
    }
    public function getAllMembers(){
        $response = Member::getAllMembers();
        return MemberResource($response);
    }
    public function getMemberById($id){
        $response = Member::getMemberById($id);
        return MemberResource($response);
    }
    public function getByFiliere($filliere){
        $response = Member::getByFiliere($filliere);
    }
}
