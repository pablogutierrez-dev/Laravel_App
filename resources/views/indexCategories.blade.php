<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
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
      <h1>LISTADO DE CATEGORIAS</h1>
      <button class="addmovie__button">
        <a href="{{ route('createMovie') }}">Añadir una pelicula</a>
      </button>
      <table class="movies__table">
        <thead class="movies__header">
          <tr class="movies__row">
            <th class="movies__head">NOMBRE</th>
            <th class="movies__head">DESCRIPCION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categoriesList as $category)
          <tr class="movies__row">
            <th class="movies__input">{{$category->name}}</th>
            <th class="movies__input">{{$category->description}}</th>
          </tr>       
          @endforeach
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
  