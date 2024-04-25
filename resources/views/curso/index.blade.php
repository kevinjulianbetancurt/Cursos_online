<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Cursos') }}
    </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
        <div class="container">
        <h1>LISTADO DE CURSOS</h1>
        <a href="{{ route('curso.create') }}" class="bg-green-700 hover:bg-green-900 text-white
        font-bold py-2 px-4 rounded ml-2">Añadir</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">título</th>
                    <th scope="col">descripción</th>
                    <th scope="col">duración</th>
                    <th scope="col">precio</th>
                    <th scope="col">categoría</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $curso->id_cursos }}</th>
                        <td>{{ $curso->titulo }}</td>
                        <td>{{ $curso->descripción}}</td>
                        <td>{{ $curso->duración}}</td>
                        <td>{{ $curso->precio}}</td>
                        <td>{{ $curso->categoria}}</td>
                        <td>
                            <a href="{{ route('curso.edit', ['curso' => $curso->id_cursos]) }}" class="bg-blue-500
                                hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Editar </a></li>
                                
                        <form action="{{ route('curso.destroy', ['curso' => $curso->id_cursos]) }}"
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