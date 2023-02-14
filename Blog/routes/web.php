<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// home page route
Route::get('/', function () {

    // get all existing post
    return view('posts', [
        'posts' => Post::latest('published_at')->get(),
        'categories' => Category::all()
    ]);
});

// get post by its slug
Route::get('post/{post:slug}', function (Post $post) { // Post::where('slug', $post)->firstOrFail()
    return view('post', [
        'post' => $post,

    ]);
});

// get category by slog
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

// get author by its userName
Route::get('authors/{author:username}', function (User $author) {
    return view('posts',[
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
