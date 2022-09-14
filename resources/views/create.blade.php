<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/637ee434dc.js" crossorigin="anonymous"></script>
  <title>Pagina de Creacion de Peliculas</title>
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
      <h1>Añade tu pelicula!</h1>
      {{-- <button class="addmovie__button">
        <a href="{{ route('indexMovies') }}">Lista General de Peliculas</a>
      </button> --}}
      
      <form action="{{ route('storeMovie') }}" method="POST" class="form">
        @csrf
        <div class="form movie--form">
          <label for="">Nombre de la pelicula</label>
          <input type="text" placeholder="nombre de la pelicula" name="name">
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
              <option value="{{ $moviesCategory->id }}">{{ $moviesCategory->name }}</option>
            @endforeach
          </select>
        </div>
        <button class="send__button">Enviar</button>
      </form>
    </section>
  </main>
</body>
</html>