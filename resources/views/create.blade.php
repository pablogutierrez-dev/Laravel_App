<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pagina de Creacion de Peliculas</title>
</head>
<body>
  <h1>Formulario de creacion</h1>

  <button>
    <a href="{{ route('indexMovies') }}">Go To Movies List</a>
  </button>
  <br>
  <br>
  
  <form action="{{ route('storeMovie') }}" method="POST">
    @csrf
    <label for="">Nombre de la pelicula</label>
    <input type="text" placeholder="nombre de la pelicula" name="name">
    @error('name_movie')
    {{ $message }}
    @enderror
    <br>
    <br>
    {{-- <label for="">Año de la pelicula</label>
    <input type="number" placeholder="año de la pelicula" name="year_movie"> --}}
    <label for="">Genero de la pelicula</label>
    <select name="category_id"" id="">
      @foreach ($moviesCategories as $moviesCategory)
        <option value="{{ $moviesCategory->id }}">{{ $moviesCategory->name }}</option>
      @endforeach
    </select>
    <button>Enviar</button>
  </form>
  
</body>
</html>