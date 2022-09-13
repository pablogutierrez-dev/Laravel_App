<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Mail\MoviesMail;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMovie;
/* use Illuminate\Support\Facades\Mail; */

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
  
  public function store(StoreMovie $request) {
    
   /*  $request->validate ([
      'name_movie' => 'required|min:2'
    ]); */
    
    $movie = new Movie;
    $movie->name = $request->name;
    $movie->category_id = $request->category_id;
    $movie->active = 1;
    $movie->save();

   /*  Movie::create([
      'name' => $request->name,
      'category_id' => $request->category_id,
    ]); */

    /* Movie::create($request->all()); */

    /* foreach (['pablo.gutierrez.pruebas@gmail.com'] as $recipient) {
      Mail::to($recipient)->send(new MoviesMail());
    } */

    return redirect()->route('indexMovies');
  } 

  public function edit ($movie_id) {
    $movie = Movie::find($movie_id);
    $categories = Category::all();
    return view('edit', ['moviesCategories' => $categories, 'movie' => $movie]);
  }

  public function update (StoreMovie $request) {

    $movie = Movie::find($request->movie_id);
    $movie->name = $request->name;
    $movie->category_id = $request->category_id;
    $movie->active = 1;
    $movie->save();

    return redirect()->route('indexMovies');
  } 

  public function delete ($movie_id) {
    $movie = Movie::find($movie_id);
    $movie->delete();
    return redirect()->route('indexMovies');
  }
}
  