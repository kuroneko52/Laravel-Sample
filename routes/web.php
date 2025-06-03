<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

use App\Http\Controllers\FileController;
use App\Http\Controllers\AjaxController;

Route::get('/', function () {
    #return view('welcome');
    return view('user_form');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/upload', [FileController::class, 'create']);
Route::post('/upload', [FileController::class, 'store']);

Route::get('/ajax', [AjaxController::class, 'index']);
Route::get('/ajax/data', [AjaxController::class, 'getData']);

Route::resource('books', BookController::class)->except(['show']);;
Route::resource('authors', AuthorController::class)->except(['show']);;
