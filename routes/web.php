<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.page.home', [
        'tittle' => "Home"
    ]);
});
Route::get('about', function () {
    return view('layouts.page.about', [
        'tittle' => "About",
        'nama' => "Rizki Wahyu Nurcahyani Fajarwati",
        'jurusan' => "Teknik Informatika"
    ]);
});
Route::get('posts', [PostController::class, 'index']);
// halaman single page
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Halaman Categories
// Route::get('/categories', function(){
//     return view('layouts.page.categories',[
//         'tittle' => 'Post Category',
//         'categories' => Category::all(),
//     ]);
// });
// Halaman Category
Route::get('/categories/{category:slug}', function(Category $category){
    return view('layouts.page.post',[
        'tittle' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});
// Halaman author
Route::get('/authors/{author:username}', function(User $author){
    return view('layouts.page.post',[
        'tittle' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

