<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\isAdmin;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/post', [AuthController::class, 'post'])->name('admin.post')->middleware('isAdmin');
Route::get('/adminindex', [AuthController::class, 'adminindex'])->name('admin.index')->middleware('isAdmin');

Route::get('/addpost', [AuthController::class, 'addPost']);
Route::post('/addpost', [AuthController::class, 'addPost'])->name('admin.addpost');

Route::get('/update/', [AuthController::class, 'update'])->name('post.edit');
Route::get('/update/{id}', [AuthController::class, 'postupdate'])->name('post.update');
Route::get('/delete/{id}', [AuthController::class, 'postdelete'])->name('post.delete')->middleware('isAdmin');


Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('admin.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');