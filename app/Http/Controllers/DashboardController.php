<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {



        $user = auth()->user();
        // $posts = $user->posts()->latest()->paginate(10);
        return view('dashboard', compact('posts'));
    }



}
