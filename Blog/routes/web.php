<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// home page route
Route::get('/', [PostController::class, 'index'])->name('home');

// get post by its slug
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// register
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
