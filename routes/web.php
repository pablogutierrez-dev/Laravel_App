<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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

Route::get('/', function () {
  /* return view('welcome'); */
  return "Bienvenidos a Laravel";
});

Route::get('/movies', [MoviesController::class, 'index'])->name('indexMovies');

Route::get('movies/create', [MoviesController::class, 'create'])->name('createMovie');

Route::get('/movies/{name_movie}/{category?}', [MoviesController::class, 'help']);

Route::post('movies/store', [MoviesController::class, 'store'])->name('storeMovie');

Route::get('/edit/{movie_id}', [MoviesController::class, 'edit'])->name('editMovie');

Route::post('movies/editMovie', [MoviesController::class, 'editMovie'])->name('updateMovie');
