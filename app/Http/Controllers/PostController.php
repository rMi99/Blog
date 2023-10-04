<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Post';
    }

//     public function index()
// {
//     $posts = Post::paginate(10); // Change 10 to the desired number of posts per page

//     return view('posts.index', compact('posts'));
// }


// Create a new blog post
public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // Create a new blog post
    $user = auth()->user();
    $post = new Post($validatedData);
    $post->user_id = $user->id;
    $post->save();

    return redirect()->route('dashboard')->with('success', 'Blog post created successfully');
}

// Edit an existing blog post
public function edit($id)
{
    $post = Post::findOrFail($id);

    // Check if the user is the owner of the post
    if ($post->user_id !== auth()->id()) {
        return redirect()->route('dashboard')->with('error', 'You do not have permission to edit this post');
    }

    return view('posts.edit', compact('post'));
}

public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    // Check if the user is the owner of the post
    if ($post->user_id !== auth()->id()) {
        return redirect()->route('dashboard')->with('error', 'You do not have permission to edit this post');
    }

    // Validate the request
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // Update the post
    $post->update($validatedData);

    return redirect()->route('dashboard')->with('success', 'Blog post updated successfully');
}

// Delete a blog post
public function destroy($id)
{
    $post = Post::findOrFail($id);

    // Check if the user is the owner of the post
    if ($post->user_id !== auth()->id()) {
        return redirect()->route('dashboard')->with('error', 'You do not have permission to delete this post');
    }

    // Delete the post
    $post->delete();

    return redirect()->route('dashboard')->with('success', 'Blog post deleted successfully');
}

}
