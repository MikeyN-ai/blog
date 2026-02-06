<?php
//namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
/*
Route::get('posts', function () {
    return view('posts/listado');
})->name('posts_listado');

Route::get('posts/{id}', function ($id) {
    return view('posts/ficha', compact('id'));
})->name('posts_ficha')
  ->where('id', "[0-9]+");
*/

Route::get('posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])
->name('posts.nuevoPrueba');

Route::get('posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])
->name('posts.editarPrueba');

/*Route::resource('posts', PostController::class)
->only(['index', 'show', 'create', 'edit', 'destroy', 'store', 'update']);*/

Route::middleware(['auth'])->resource('posts', PostController::class)
->except(['index', 'show']);

Route::resource('posts', PostController::class)->only(['index', 'show']);


Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
