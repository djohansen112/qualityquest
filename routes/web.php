<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

//Welcome, all posts
Route::get('/', function () {
    return view('index', ['page_heading' => 'Welcome page', 'posts' => Post::all()]);
});

//Single post only
Route::get('/posts/{post}', function (Post $post) {
    return view('post', ['page_heading' => 'Post page', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/categories', function () {
    return view('categories', ['placeholder' => 'categories']);
});
Route::get('/contact', function () {
    return view('placeholder', ['placeholder' => 'contact']);
});
Route::get('/categories/{name}', function ($name) {
    return view('placeholder', ['placeholder' => $name]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';