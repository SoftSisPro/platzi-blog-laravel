<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/',                 'home')->name('home');
    Route::get('/blog/{post:slug}', 'post')->name('post');
});

Route::redirect('dashboard','posts')->name('dashboard');

//- Creamos la ruta posts
Route::resource('posts', PostController::class)->except('show')->middleware(['auth', 'verified']);

//- Include ruta de autenticación
require __DIR__.'/auth.php';
