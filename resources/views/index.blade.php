<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movies Index</title>
</head>
<body>
  <h1>Listado de Peliculas</h1>
  
  {{--  @forelse ($moviesList as $item)
    <li>{{$item}}</li> 
    @empty
    <p>No hay datos para mostrar.</p>
    @endforelse --}}
    
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>CATEGORIA ID</th>
          <th>CREADO</th>
          <th>ESTADO</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($moviesList as $movie)
        <tr>
          <th>{{$movie->id}}</th>
          <th>{{$movie->name}}</th>
          <th>{{$movie->category_id}}</th>
          <th>{{$movie->created_at}}</th>
          <th>
            @if ($movie->active)
              <span style="color: green">Activo</span>
            @else
              <span style="color: red">Inactivo</span>
            @endif
          </th>
        </tr>
        @empty
        <tr>
          <th>Sin peliculas.</th>
        </tr>
        @endforelse
      </tbody>
    </table>
    
  </body>
  </html>