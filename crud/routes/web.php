<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Notes;

Route::get('/note', [Notes::class, 'index'])->name('note.index');
Route::get('/note/create', [Notes::class, 'create'])->name('note.create');
Route::post('/note/store', [Notes::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [Notes::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [Notes::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [Notes::class, 'show'])->name('note.show');
Route::delete('/note/destroy/{note}', [Notes::class, 'destroy'])->name('note.destroy');