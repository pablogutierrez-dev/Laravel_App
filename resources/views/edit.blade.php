<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edicion de Pelicula</title>
</head>
<body>
  <h1>Edita o actualiza la pelicula</h1>

  <button>
    <a href="{{ route('indexMovies') }}">Go To Movies List</a>
  </button>
  <br>
  <br>
  
  <form action="{{ route('updateMovie') }}" method="POST">
    @csrf

    <input type="hidden" name="movie_id" value="{{ $movie->id }}>
    <label for="">Nombre de la pelicula</label>
    <input type="text" placeholder="nombre de la pelicula" name="name_movie" value="{{ $movie->name }}">
    <br>
    <br>
    {{-- <label for="">Año de la pelicula</label>
    <input type="number" placeholder="año de la pelicula" name="year_movie"> --}}
    <label for="">Genero de la pelicula</label>
    <select name="category_id"" id="">
      @foreach ($moviesCategories as $moviesCategory)
        <option value="{{ $moviesCategory->id }}" @if ($moviesCategory->id == $movie->category_id) selected @endif >{{ $moviesCategory->name }}</option>
      @endforeach
    </select>
    <button>Enviar</button>
  </form>
  
</body>
</html>