<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\RelationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// routes for all member operations
Route::get('api/members', [MemberController::class, 'getAllMembers']);
Route::get('api/members/{name}', [MemberController::class, 'getAllMembers']);
Route::get('api/members/{filliere}', [MemberController::class, 'getByFiliere']);
Route::get('api/members/{community_id}',[MemberController::class, 'getAllMembers']);
Route::post('api/members/add', [MemberController::class, 'createMember']);
Route::put('api/members/update', [MemberController::class, 'updateMember']);

// routes for all community operations
Route::get('api/community', [CommunityController::class, 'getAllCommunities']);
Route::get('api/community/{id}', [CommunityController::class, 'getCommunityById']);
Route::post('api/community/add', [CommunityController::class, 'createCommunity']);
Route::put('api/community/update', [CommunityController::class, 'updateCommunity']);

// routes for relations
Route::get('api/relation', [RelationController::class, 'getAllRelation']);
Route::get('api/relation/{name}', [RelationController::class, 'getRelationByName']);
Route::put('api/relation', [RelationController::class, 'updateRelation']);
Route::post('api/relation/add', [RelationController::class, 'createRelation']);

// routes for post
Route::get('api/posts', [PostController::class, 'getAllPosts']);
Route::get('api/posts/{id}', [PostController::class, 'getPostById']);
Route::put('api/posts/update', [PostController::class, 'updatePost']);
Route::post('api/posts/add', [PostController::class, 'createPost']);
