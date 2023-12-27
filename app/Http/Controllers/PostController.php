<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ressources\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function getAllPosts()
{
    $posts = Post::all();

    return response()->json(['posts' => $posts]);
}

    public function create()
    {
        return view('posts.create');
    }

    public function createPost(Request $request)
    {
        // Validation des données du formulaire ici

        $post=Post::create([
            'title' => $request->input('title'),
            'dateCreation' => now(),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'document' => $request->input('document'),
        ]);

        return response()->json($post);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validation des données du formulaire ici

        $post->update([
            'title' => $request->input('title'),
            'dateCreation' => $request->input('dateCreation'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'document' => $request->input('document'),
        ]);

        return redirect()->route('posts.index')->with('success', 'Le post a été mis à jour avec succès.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Le post a été supprimé avec succès.');
    }
}
