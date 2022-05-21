<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.results');
Route::get('/post/category/{cat}', [App\Http\Controllers\CatController::class, 'show'])->name('post.results.category');
Route::get('/post/user', [App\Http\Controllers\UserController::class, 'index'])->name('post.users');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/profile/post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::get('/profile/post/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('profile.post.delete');
Route::put('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
