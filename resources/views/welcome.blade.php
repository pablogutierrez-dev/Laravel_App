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
  <script defer src="{{ asset('assets/js/app.js') }}"></script>
  <title>Movies APP</title>
</head>
<body>
  <nav>
    <div class="logo">MOVIE UP</div>

    <div class="icon" id="icon_menu">
      <i class="fa-sharp fa-solid fa-bars"></i>
    </div>

    <div class="menu" id="menu">
      <ul class="navbar__links">
        <i class="fa-solid fa-xmark" id="close_icon"></i>
        <li class="navbar__link">Peliculas</li>
        <li class="navbar__link">Categorias</li>
      </ul>
    </div>

  </nav>


  <main>
    <section class="banner__section">
      <h1>CREA TU LISTA PERSONAL!</h1>
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