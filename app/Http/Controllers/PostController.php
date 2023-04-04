<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $tittle = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' .$category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by ' .$author->name;
        }
        return view('layouts.page.post', [
            'tittle' => "All Posts" . $tittle,
            'active' => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
        ]);
    }
    public function show(Post $post){
        return view('layouts.page.singlepost', [
            'tittle' => "Single Post",
            'active' => 'posts',
            'post' => $post,
        ]);
    }
}
