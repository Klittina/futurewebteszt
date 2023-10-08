<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('loggedin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/loggedin', function () {
    return view('loggedin');
})->middleware(['auth', 'verified'])->name('loggedin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/api/comment', [CommentController::class, 'index']);
Route::get('/api/comment/{id}', [CommentController::class, 'show']);
Route::delete('/api/comment/{id}', [CommentController::class, 'destroy']);
Route::post('/api/comment', [CommentController::class, 'store']);
Route::patch('/api/comment/{id}', [CommentController::class, 'update']);
Route::get('/api/user/comments',[UserController::class, 'mycomments']);


Route::get('/api/post', [PostController::class, 'index']);
Route::get('/api/post/{id}', [PostController::class, 'show']);
Route::delete('/api/post/{id}', [PostController::class, 'destroy']);
Route::post('/api/post', [PostController::class, 'store']);
Route::patch('/api/post/{id}', [PostController::class, 'update']);

Route::get('/api/user/post',[UserController::class, 'myownpost']);
Route::get('/api/user', [UserController::class, 'index']);
Route::get('/api/usert/{id}', [UserController::class, 'show']);
Route::delete('/api/user/{id}', [UserController::class, 'destroy']);
Route::post('/api/user', [UserController::class, 'store']);
Route::patch('/api/user/{id}', [UserController::class, 'update']);

require __DIR__.'/auth.php';
