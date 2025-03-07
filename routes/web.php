<?php

use App\Http\Controllers\ProfileController;
//use Illuminate\Routing\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Types\Model\Posts;

/*Route::get('/', function () {
return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/posts',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

Route::post('/posts',[PostController::class,'store'])->name('posts.store');

Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');

Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');

Route::delete('/posts/{post}',[PostController::class,'destory'])->name('posts.destory');





