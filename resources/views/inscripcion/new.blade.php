<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ADD Inscripciones</title>
  </head>
  <body>
    <div class="container">
        <h1>ADD INSCRIPCIONES</h1>  
        <form method="POST" action="{{route('inscripcion.store')}}">
         @csrf

             <label for="id_cursos">Titulo</label>
             <select class="form-select" id="id_cursos" name="id_cursos" required>
            <option selected disabled value="">Choose one...</option>
             @foreach ($inscripcionescurso as $inscripcioncurso)
            <option value="{{$inscripcioncurso->id_cursos}}">{{$inscripcioncurso->titulo}}</option>
             @endforeach
             </select>
   
            <label for="id_instructores">Nombre Instructores</label>
             <select class="form-select" id="id_instructores" name="id_instructores" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($inscripcionesinstructores as $inscripcioninstructor)
            <option value="{{$inscripcioninstructor->id_instructores}}">{{$inscripcioninstructor->nombre}}</option>
            @endforeach
             </select>

            <label for="id_estudiantes">Nombre Estudiantes</label>
             <select class="form-select" id="id_estudiantes" name="id_estudiantes" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($inscripcionesestudiantes as $inscripcionestudiante)
            <option value="{{$inscripcionestudiante->id_estudiantes}}">{{$inscripcionestudiante->nombre}}</option>
            @endforeach
             </select>

             <div class="mb-3">
              <label for="fecha_inscripcion" class="form-label">Fecha Inscripción</label>
              <input type="date" required class="form-control" id="fecha_inscripcion" placeholder="Fecha Inscripción"
                name="fecha_inscripcion">
            </div>


            <div class="mt-3">
           <button type="submit" class="btn btn-primary">Save</button>
           <a href="{{route('inscripcion.index')}}" class="btn btn-warning">Cancel</a>
            </div>
          </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>