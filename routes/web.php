<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Romzi Farhan Ghozi",
        "email" => "romzifg@gmail.com",
        "profession" => "Full-Stack Developer",
        "image" => "Foto.jpeg",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function() {
    return view('categories', [
        'title' => "Post Category",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => 'User Post',
        'posts' => $author->posts,
    ]);
});