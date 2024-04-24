<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inscripciones List</title>
  </head>
  <body>
    <div class="container">
      <h1>LISTADO DE INSCRIPCIONES</h1>
      <a href="{{ route('inscripcion.create') }}" class="btn btn-seccess">Add</a>
    <table class="table">
   <thead>
     <tr>
     <th scope="col">id_inscripciones</th>
     <th scope="col">id_cursos</th>
     <th scope="col">id_instructores</th>
     <th scope="col">id_estudiantes</th>
     <th scope="col">Fecha-Inscripción</th>
     <th scope="col">Actions</th>
      </tr>
   </thead>
    <tbody>
      @foreach ($inscripciones as $inscripcion)
        <tr>
          <th scope="row">{{$inscripcion->id_inscripciones}}</th>
          <td>{{ $inscripcion->id_cursos }}</td>
          <td>{{ $inscripcion->id_instructores }}</td>
          <td>{{ $inscripcion->id_estudiantes }}</td>
          <td>{{ $inscripcion->fecha_inscripcion }}</td>
          <td>
            <a href="{{ route('inscripcion.edit', ['inscripcion' => $inscripcion->id_inscripciones]) }}" class="btn btn-info">
              Editar </a></li>
              
              <form action="{{ route('inscripcion.destroy', ['inscripcion' => $inscripcion->id_inscripciones]) }}"
               method='POST' style="display: inline-block">
               @method('delete')
               @csrf
              <input class="btn btn-danger" type="submit" value="Eliminar">
              </form>
          </td>
         </tr>
       @endforeach
    </tbody>
 </table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
