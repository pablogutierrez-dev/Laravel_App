<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
  //
  public function index() {
    //$movies = ['The Shinner', 'Satyricon', 'Lost Highway', 'Conan'];
    $movies = Movie::all();
    return view('index', ['moviesList' => $movies]);
  }
  
  public function create() {
    return view('create');
  }
  
  public function help($name_movie, $category = null) {
    
    $date = Now();
    return view ('show', [
      'nameMovie' => $name_movie, 
      'categoryMovie' => $category,
      'dateMovie' => $date]);
    }
  }
  