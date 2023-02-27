<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {

    // GETS
    Route::get('cursos', 'index')->name("cursos.index");
    Route::get('cursos/create', 'create')->name("cursos.create");
    Route::get('cursos/{curso}', 'show')->name("cursos.show");

    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');

    // POSTS
    Route::post('cursos', 'store')->name('cursos.store');

    // PUTS
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
});
