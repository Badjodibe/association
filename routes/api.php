<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\Security;
use App\Http\Controllers\RoleController;


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
Route::get('/members', [MemberController::class, 'getAllMembers']);
Route::post('/members/names/', [MemberController::class, 'getMemberByName']);
Route::post('/members/filliere', [MemberController::class, 'getByFiliere']);
Route::post('/members/id',[MemberController::class, 'getMemberById']);
Route::post('/members/add', [MemberController::class, 'createMember']);
Route::put('/members/update', [MemberController::class, 'updateMember']);
Route::post('/members/community', [MemberController::class, 'getCommunityMember']);

// routes for all community operations
Route::get('/community', [CommunityController::class, 'getAllCommunities']);
Route::post('/community/id', [CommunityController::class, 'getCommunityById']);
Route::post('/community/add', [CommunityController::class, 'createCommunity']);
Route::put('/community/update', [CommunityController::class, 'updateCommunity']);
Route::post('/community/name', [CommunityController::class, 'getCommunityByName']);
Route::delete('/community/delete', [CommunityController::class, 'deleteCommunity']);

// routes for relations
Route::get('/relation', [RelationController::class, 'getAllRelation']);
Route::get('/relation/{name}', [RelationController::class, 'getRelationByName']);
Route::put('/relation', [RelationController::class, 'updateRelation']);
Route::post('/relation/add', [RelationController::class, 'createRelation']);

// routes for post
Route::get('/posts', [PostController::class, 'getAllPosts']);
Route::get('/posts/{id}', [PostController::class, 'getPostById']);
Route::put('/posts/update', [PostController::class, 'updatePost']);
Route::post('/posts/add', [PostController::class, 'createPost']);

// routes for document
Route::get('/documents', [DocumentController::class, 'getAllDocument']);
Route::post('/documents/add', [DocumentController::class, 'createDocument']);
Route::get('/documents/{date}', [DocumentController::class, 'getDocumentByDate']);
Route::get('/documents/{creator}', [DocumentController::class, 'getDocumentByCreator']);
Route::get('/documents/{id}', [DocumentController::class, 'getDocumentById']);
Route::put('/documents/update', [DocumentController::class, 'updateDocument']);

// foutes for security

Route::get('/user', [Security::class, 'getAllUser']);
Route::post('/user/add', [Security::class, 'createUser']);
Route::get('/login', [Security::class, 'login']);
Route::get('/passwordchange', [Security::class, 'changePassword']);
Route::get('/documents/{id}', [Security::class, 'getDocumentById']);
Route::put('/documents/update', [Security::class, 'updateDocument']);


Route::get('/roles', [RoleController::class, 'getAllRole']);
Route::post('/role/add', [RoleController::class, 'createRole']);
Route::get('/login', [Security::class, 'login']);
Route::get('/passwordchange', [Security::class, 'changePassword']);
Route::get('/documents/{id}', [Security::class, 'getDocumentById']);
Route::put('/documents/update', [Security::class, 'updateDocument']);

