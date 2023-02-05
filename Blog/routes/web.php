<?php

use App\Models\Post;
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
        'posts' => Post::all(),
    ]);
});

// get post by its slug
Route::get('post/{id}', function ($id) {

    // find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => Post::findOrFail($id),
    ]);
});
