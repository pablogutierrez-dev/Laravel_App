<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CategoryController;

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
  return view('welcome');
});

Route::get('/movies', [MoviesController::class, 'index'])->name('indexMovies');

Route::get('/movies/create', [MoviesController::class, 'create'])->name('createMovie');

Route::post('/movies/store', [MoviesController::class, 'store'])->name('storeMovie');

Route::get('/edit/{movie_id}', [MoviesController::class, 'edit'])->name('editMovie');

Route::post('/movies/update', [MoviesController::class, 'update'])->name('updateMovie');

Route::get('/delete/{movie_id}', [MoviesController::class, 'delete'])->name('deleteMovie');

Route::resource('/categories', CategoryController::class);