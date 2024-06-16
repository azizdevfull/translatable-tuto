<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return response()->json(PostResource::collection(Post::all()));
    }


    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();

        return response()->json([
            'message' => 'Success',
            'data' => $post
        ]);
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
