<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('layouts.page.post', [
            'tittle' => "All Posts",
            // "posts" => Post::all(),
            "posts" => Post::with(['author', 'category'])->latest()->get(),
        ]);
    }
    public function show(Post $post){
        return view('layouts.page.singlepost', [
            'tittle' => "Single Post",
            'post' => $post,
        ]);
    }
}
