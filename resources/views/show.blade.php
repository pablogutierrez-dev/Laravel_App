<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  @if($categoryMovie) 
    <h1>El nombre de la pelicula es: {{$nameMovie}} y pertenece a la categoria de: {{$categoryMovie}}.</h1>
    <h3>Fue creada el dia: {{$dateMovie}}.</h3>
  @else 
    <h1>El nombre de la pelicula es: {{$nameMovie}}.</h1>
    <h3>Fue creada el dia: {{$dateMovie}}.</h3>
  @endif

</body>
</html>