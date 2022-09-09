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

  <form action="">
    <label for="">Nombre de la pelicula</label>
    <input type="text" placeholder="nombre de la pelicula" name="name_movie">
    <label for="">Año de la pelicula</label>
    <input type="number" placeholder="año de la pelicula" name="year_movie">
    <label for="">Genero de la pelicula</label>
    <select name="genre_movie"" id="">
      <option value="accion">Accion</option>
      <option value="terror">Terror</option>
      <option value="drama">Drama</option>
    </select>
    <button>Enviar</button>
  </form>
  
</body>
</html>