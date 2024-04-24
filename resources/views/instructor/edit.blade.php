<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar listado de instructores</title>
</head>

<body>
    <div class="container">
        <h1>EDITAR INSTRUCTOR</h1>
        <form method="POST" action="{{ route('instructor.update', ['instructor' => $instructor->id_instructores]) }}">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="codigo" class="form-label">Id Instructor</label>
                <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id"
                    disabled="disabled" value="{{ $instructor->id_instructores }}" id="codigoHelp" 
                    class="form-text">
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" required class="form-control" id="nombre" aria-describedby="nameHelp"
                    name="nombre" placeholder="Nombre" value="{{ $instructor->nombre }}">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">apellido</label>
                <input type="text" required class="form-control" id="apellido" aria-describedby="nameHelp"
                    name="apellido" placeholder="Apellido" value="{{ $instructor->apellido }}">
            </div>

            <div class="mb-3">
                <label for="especialidad" class="form-label">especialidad</label>
                <input type="text" required class="form-control" id="especialidad" aria-describedby="nameHelp"
                    name="especialidad" placeholder="Especialidad" value="{{ $instructor->especialidad }}">
            </div>

            <div class="mb-3">
                <label for="biografía" class="form-label">biografía</label>
                <input type="text" required class="form-control" id="biografía" aria-describedby="nameHelp"
                    name="biografía" placeholder="Biografía" value="{{ $instructor->biografía }}">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('instructor.index') }}" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>
</html>