<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RelationRessource as com;
use App\Models\entity\Relation;


class RelationController extends Controller
{
    public function getAllRelation()
    {
        $relations = Relation::all();
        return response()->json($relations);
    }

    public function createRelation(Request $relation)
    {
        $data = $relation->json()->all();
        $response = Relation::createRelation($data);
        return response()->json($response);
    }

    public function getRelationByName(Request $name)
    {
        $nom = $name->json()->all();
        $response = Relation::getRelationByName($nom);
        return response()->json($response);
    }

    public function updateRelation(Request $request, $id)
    {
        $relation = Relation::find($id);
        $relation->entity_name = $request->input('entity_name');
        $relation->type_relation = $request->input('type_relation');
        $relation->description = $request->input('description');
        $relation->date = $request->input('date');
        $relation->path_to_logo = $request->input('path_to_logo');
        $relation->save();

        return response()->json(['message' => 'Relation updated', 'data' => $relation]);
    }
}