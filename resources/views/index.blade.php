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
  <title>Movies Index</title>
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
    <section class="banner__section">
      <h1>LISTADO DE PELICULAS</h1>
      <button class="addmovie__button">
        <a href="{{ route('createMovie') }}">Añadir una pelicula</a>
      </button>
      <table class="movies__table">
        <thead class="movies__header">
          <tr class="movies__row">
            <th class="movies__head">NOMBRE</th>
            <th class="movies__head">CATEGORIA</th>
            <th class="movies__head">EDITAR / ELIMINAR</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($moviesList as $movie)
          <tr class="movies__row">
            <th class="movies__input">{{$movie->name}}</th>
            <th class="movies__input">{{$movie->category_id}}</th>
            <th class="movies__input">
              <button class="movies__button">
                <a href="{{ route('editMovie', $movie->id) }}">Editar</a>
              </button>
              <button class="movies__button">
                <a href="{{ route('deleteMovie', $movie->id) }}">Eliminar</a>
              </button>
            </th>
          </tr>       
          @empty
          <tr>
            <th>Sin peliculas.</th>
          </tr>
          @endforelse
        </tbody>
      </table>
    </section>
  </main>
  
  {{--  @forelse ($moviesList as $item)
    <li>{{$item}}</li> 
    @empty
    <p>No hay datos para mostrar.</p>
    @endforelse --}}
    
    
    
  </body>
  </html>