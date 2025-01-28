<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/post', function () {
    return view('post');
});


// blog apis

Route::post('/posts', [PostController::class, 'store'])->name("post.store");

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
