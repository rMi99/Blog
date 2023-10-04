<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Posrt';
    }

//     public function index()
// {
//     $posts = Post::paginate(10); // Change 10 to the desired number of posts per page

//     return view('posts.index', compact('posts'));
// }
}
