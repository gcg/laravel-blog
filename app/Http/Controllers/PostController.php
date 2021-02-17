<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request): \Illuminate\View\View
    {
        $posts = Post::latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function view(Request $request, Post $post): \Illuminate\View\View
    {
        return view('posts.view', ['post' => $post]);
    }
}
