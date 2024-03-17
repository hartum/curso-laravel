<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Articles;
use App\Http\Controllers\PostsController;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');

Route::get('/article', [Articles::class, 'index'])->name('article.index');
Route::get('/article/create', [Articles::class, 'create'])->name('article.create');
Route::post('/article/store', [Articles::class, 'store'])->name('article.store');
Route::get('/article/edit/{article}', [Articles::class, 'edit'])->name('article.edit');
Route::put('/article/update/{article}', [Articles::class, 'update'])->name('article.update');
Route::get('/article/show/{article}', [Articles::class, 'show'])->name('article.show');
Route::delete('/article/destroy/{article}', [Articles::class, 'destroy'])->name('article.destroy');

Route::resource('/post', PostsController::class);