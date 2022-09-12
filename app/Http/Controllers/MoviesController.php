<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use App\Http\Requests\StoreMovie;

class MoviesController extends Controller
{
  //
  public function index() {
    //$movies = ['The Shinner', 'Satyricon', 'Lost Highway', 'Conan'];
    $movies = Movie::orderBy('id', 'desc')->get();
    return view('index', ['moviesList' => $movies]);
  }
  
  public function create() {
    
    $categories = Category::all();
    return view('create', ['moviesCategories' => $categories]);
  }
  
  public function help($name_movie, $category = null) {
    
    $date = Now();
    return view ('show', [
      'nameMovie' => $name_movie, 
      'categoryMovie' => $category,
      'dateMovie' => $date]);   
  }
    
  public function store(StoreMovie $request) {

   /*  $request->validate ([
      'name_movie' => 'required|min:2'
    ]); */
    /* 
    $movie = new Movie;
    $movie->name = $request->name;
    $movie->category_id = $request->category_id;
    $movie->active = 1;
    $movie->save(); */

    /* Movie::create([
      'name' => $request->name,
      'category_id' => $request->category_id,
    ]); */

    Movie::create($request->all());

    return redirect()->route('indexMovies');
  } 

  public function edit ($movie_id) {
    $movie = Movie::find($movie_id);
    $categories = Category::all();
    return view('edit', ['moviesCategories' => $categories, 'movie' => $movie]);
  }

  public function editMovie(Request $request) {

    $movie = Movie::find($request->movie_id);
    $movie->name = $request->name_movie;
    $movie->category_id = $request->category_id;
    $movie->active = 1;
    $movie->save();

    return redirect()->route('indexMovies');
  } 
}
  