<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <script src="https://kit.fontawesome.com/637ee434dc.js" crossorigin="anonymous"></script>
  <title>Edicion de Pelicula</title>
</head>
<body> 
  <nav>
    <div class="logo">MOVIE UP</div>
    <div class="icon"><i class="fa-sharp fa-solid fa-bars"></i></div>
    <ul class="navbar__links">
      <li class="navbar__link">Peliculas</li>
      <li class="navbar__link">Categorias</li>
    </ul>
  </nav>

  <main>
    <section class="banner__section banner--form">
      <h1>Edita tu pelicula!</h1>
      <button class="addmovie__button">
        <a href="{{ route('indexMovies') }}">Go To Movies List</a>
      </button>
      
      <form action="{{ route('updateMovie') }}" method="POST" class="form">
        @csrf
        <div class="form movie--form">
          <input type="hidden" name="movie_id" value="{{ $movie->id }}">
          <label for="">Nombre de la pelicula</label>
          <input type="text" placeholder="nombre de la pelicula" name="name" value="{{ $movie->name }}">
          <div class="error__message">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </div>
        {{-- <label for="">Año de la pelicula</label>
        <input type="number" placeholder="año de la pelicula" name="year_movie"> --}}
        <div class="form genre--form">
          <label for="">Genero de la pelicula</label>
          <select name="category_id"" id="">
            @foreach ($moviesCategories as $moviesCategory)
            <option value="{{ $moviesCategory->id }}" 
                  @if ($moviesCategory->id == $movie->category_id) selected 
                  @endif >
              {{ $moviesCategory->name }}
            </option>
            @endforeach
          </select>
        </div>
        <button class="send__button">Enviar</button>
      </form>
    </section>
  </main>
</body>
</html>