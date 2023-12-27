<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretaireController extends Controller
{
    public function getAllSecretaires()
    {
        $secretaires = Secretaire::all();
        return response()->json($secretaires);
    }

    public function createSecretaire(Request $request)
    {
        $secretaire = Secretaire::createSecretaire(
            $request->input('community_id'),
            $request->input('member_id'),
            $request->input('description'),
            $request->input('mandat')
        );

        return response()->json(['message' => 'Secrétaire created', 'data' => $secretaire]);
    }

    public function getSecretaireById($id)
    {
        $secretaire = Secretaire::getSecretaireById($id);
        return response()->json($secretaire);
    }

    public function updateSecretaire(Request $request, $id)
    {
        $secretaire = Secretaire::find($id);
        $secretaire->updateSecretaire(
            $request->input('community_id'),
            $request->input('member_id'),
            $request->input('description'),
            $request->input('mandat')
        );

        return response()->json(['message' => 'Secrétaire updated', 'data' => $secretaire]);
    }

    public function getSecretaireByCommunityName($communityName)
    {
        $secretaires = Secretaire::getSecretaireByCommunityName($communityName);
        return response()->json($secretaires);
    }

    public function getMembersBySecretaireIds()
    {
        $members = Secretaire::getMembersBySecretaireIds();
        return response()->json($members);
    }

    public function deleteSecretaire($id)
    {
        $secretaire = Secretaire::find($id);
        $secretaire->deleteSecretaire();

        return response()->json(['message' => 'Secrétaire deleted']);
    }
}