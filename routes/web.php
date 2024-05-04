<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $posts = [];
    if (auth()->check()) {
        $posts = auth()->user()->userPosts()->latest()->get(); 
    }
    
    
    // $posts = Post::where('user_id', auth()->id())->get(); // first option
    return view('home', ['posts' => $posts]);
});

// Route::post('/register',[UserController::class, 'register']);
// Route::post('/logout', [UserController::class,'logout']);
Route::post('/register',[UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::post('/logout', [UserController::class,'logout']);

// posts

Route::post('/create-post', [PostController::class,'createPost']);
Route::get('/update-post/{post}', [PostController::class, 'updateScreen']);
Route::put('/update-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);