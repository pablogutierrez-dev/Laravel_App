<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <script src="https://kit.fontawesome.com/637ee434dc.js" crossorigin="anonymous"></script>
  <title>Movies APP</title>
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
      <h1>AÑADE TUS PELICULAS FAVORITAS</h1>
      <button class="addmovie__button">
        <a href="{{ route('createMovie') }}">Añadir una pelicula</a>
      </button>
      <img src="../assets/images/banner.jpg" alt="banner image" class="banner__image">
      <button class="addmovie__button">
        <a href="{{ route('indexMovies') }}">Ir a la lista general</a>
      </button>
    </section>
  </main>
  
</body>
</html>