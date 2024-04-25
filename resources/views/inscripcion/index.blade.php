<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  {{ __('Inscripciones') }}
  </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900">
      <div class="container">
      <h1>LISTADO DE INSCRIPCIONES</h1>
      <a href="{{ route('inscripcion.create') }}" class="bg-green-700 hover:bg-green-900 text-white
      font-bold py-2 px-4 rounded ml-2">Añadir</a>
    <table class="table">
   <thead>
     <tr>
     <th scope="col">id_inscripciones</th>
     <th scope="col">titulo</th>
     <th scope="col">nombre_instructores</th>
     <th scope="col">nombre_estudiantes</th>
     <th scope="col">Fecha-Inscripción</th>
     <th scope="col">Actions</th>
      </tr>
   </thead>
    <tbody>
      @foreach ($inscripciones as $inscripcion)
        <tr>
          <th scope="row">{{$inscripcion->id_inscripciones}}</th>
          <td>{{ $inscripcion->titulo }}</td>
          @foreach ($instructores as $instructor)
          <td>{{ $instructor->nombre }}</td>
          @endforeach
          @foreach ($estudiantes as $estudiante)
          <td>{{ $estudiante->nombre }}</td>
          @endforeach
          <td>{{ $inscripcion->fecha_inscripcion }}</td>
          <td>
            <a href="{{ route('inscripcion.edit', ['inscripcion' => $inscripcion->id_inscripciones]) }}" class="bg-blue-500
              hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Editar </a></li>
              
              <form action="{{ route('inscripcion.destroy', ['inscripcion' => $inscripcion->id_inscripciones]) }}"
               method='POST' style="display: inline-block">
               @method('delete')
               @csrf
              <input class="bg-red-500
              hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2" type="submit" value="Eliminar">
              </form>
          </td>
         </tr>
       @endforeach
    </tbody>
 </table>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>