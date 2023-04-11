<?php

use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('layouts.page.home', [
        'tittle' => "home",
        'active' => "home"
    ]);
});
Route::get('about', function () {
    return view('layouts.page.about', [
        'tittle' => "about",
        'active' => "about",
        'nama' => "Rizki Wahyu Nurcahyani Fajarwati",
        'jurusan' => "Teknik Informatika"
    ]);
});
Route::get('posts', [PostController::class, 'index']);
// halaman single page
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Halaman Categories
Route::get('/categories', function(){
    return view('layouts.page.categories',[
        'tittle' => 'Post Category',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});
// Halaman Category
Route::get('/categories/{category:slug}', function(Category $category){
    return view('layouts.page.post',[
        'tittle' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});
// Halaman author
Route::get('/authors/{author:username}', function(User $author){
    return view('layouts.page.post',[
        'tittle' => "Post By Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('layouts.page.dashboard.dashboard');
})->middleware('auth');
