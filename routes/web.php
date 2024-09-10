<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get    ⎜ Consultar
 * Route::post   ⎜ Guardar
 * Route::delete ⎜ Eliminar
 * Route::put    ⎜ Actualizar
 */

/**
 * RUTAS DE VISTA CON FUNCION ANONIMA

Route::get('/', function () {
    //return "Ruta home";
    return view("home");
})->name('home');

Route::get('/blog', function () {
    //return "listado de publicaciones";
    $posts = [
        ['id' => 1 , 'title' => 'PHP', 'slug' => 'PHP'],
        ['id' => 2 , 'title' => 'LARAVEL', 'slug' => 'Laravel'],
        ['id' => 3 , 'title' => 'HTML', 'slug' => 'HTML']
    ];
    //return view('blog', compact('posts'));
    return view('blog', ['posts'=>$posts]);
})->name('blog');;


Route::get('/blog/{slug}', function ($slug) {
    //return "listado de publicaciones - $slug";
    $post = $slug;
    return view('post', compact('post'));
})->name('post');;

Route::get('buscar', function (Request $request) {
    return $request->all();
});
*/


/**
 * RUTAS DE VISTA CON CONTROLADOR METODO DIRECTO

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'post'])->name('post');
*/


/**
 * RUTAS DE VISTA CON CONTROLADOR METODO POR GRUPO
 */
Route::controller(PageController::class)->group(function () {
    Route::get('/',            'home')->name('home');
    Route::get('/blog',        'blog')->name('blog');
    Route::get('/blog/{slug}', 'post')->name('post');
});
