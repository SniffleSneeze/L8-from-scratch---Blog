<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // get all existing post
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,

        ]);
    }
}
