<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Estudiantes') }}
    </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
        <div class="container">
        <h1>LISTADO DE ESTUDIANTES</h1>
        <a href="{{ route('estudiante.create') }}" class="bg-green-700 hover:bg-green-900 text-white
        font-bold py-2 px-4 rounded ml-2">Añadir</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">email</th>
                    <th scope="col">nivel_educativo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <th scope="row">{{ $estudiante->id_estudiantes }}</th>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido}}</td>
                        <td>{{ $estudiante->email}}</td>
                        <td>{{ $estudiante->nivel_educativo}}</td>
                        <td>
                            <a href="{{ route('estudiante.edit', ['estudiante' => $estudiante->id_estudiantes]) }}" class="bg-blue-500
                                hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Editar </a></li>
                                
                        <form action="{{ route('estudiante.destroy', ['estudiante' => $estudiante->id_estudiantes]) }}"
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