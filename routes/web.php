<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\isAdmin;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [FrontController::class, 'index']);

Route::get('/kateqoriya/{cat}', [FrontController::class, 'category']);

Route::get('/singlepost/{id}/{slug}', [FrontController::class, 'singlepost']);

Route::get('/post', [AuthController::class, 'post'])->name('admin.post')->middleware('isAdmin');
Route::get('/adminindex', [AuthController::class, 'adminindex'])->name('admin.index')->middleware('isAdmin');

Route::get('/addpost', [AuthController::class, 'addPost']);
Route::post('/addpost', [AuthController::class, 'addPost'])->name('admin.addpost');

Route::post('/update', [AuthController::class, 'update'])->name('post.edit')->middleware('isAdmin');
Route::get('/update/{id}', [AuthController::class, 'postupdate'])->name('post.update')->middleware('isAdmin');
Route::get('/delete/{id}', [AuthController::class, 'postdelete'])->name('post.delete')->middleware('isAdmin');

Route::get('/login', [AuthController::class, 'login'])->name('admin.login')->middleware('isNotAdmin');
Route::post('/login', [AuthController::class, 'loginPost'])->name('admin.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');