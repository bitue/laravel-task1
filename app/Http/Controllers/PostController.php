<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    // Create a Post
    public function store(Request $request)
    {
        // Validate the request input
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
        // Save the post to the database
        $data = new Post;
        $data->title = $validated['title']; // Use validated data
        $data->content = $validated['content']; // Use validated data
        $data->save();
    
        // Option 1: Return the saved post
        // return response()->json(['message' => 'Post created successfully!', 'post' => $data]);
    
        // Option 2: Redirect to a route with a success message
        return redirect()->route('home');
    }
   

    // List All Posts
    public function index()
    {
        return response()->json(Post::all());
    }

    // View a Single Post
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json($post);
    }
}
