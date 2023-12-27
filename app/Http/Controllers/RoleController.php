<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{ 
    // retourner toutes les roles de l'organisation
    public function getAllRole()
    {
        $roles= Role::getAllRoles();
        return response()->json($roles);
    }
    // retourner creer un roles
    public function createRole(Request $roles)
    {
        $data = $roles->json()->all();
        $response = Role::createRole($data);
        return response()->json($response);
    }
}
