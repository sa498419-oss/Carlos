<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tus videojuegos') }}
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900 grid">
        <x-slot name="botones">
            <h2 class="font-semibold text-xl text-gray-800
leading-tight">
                <a href="{{ route('vjuegos.create') }}"
                    class="bg-lime-500 hover:bg-lime-400 text-white font-bold py-1 px-4 border-b-4 border-lime-700 hover:border-lime-500 rounded">Agregar
                    videojuego
                </a>
            </h2>
        </x-slot>
        <table class="table-auto text-center">
            <thead>
                <tr>
                    <th>Portada</th>
                    <th>Nombre</th>
                    <th>Consola</th>
                    <th>Casificación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($juegosUsuario as $juego)
                    <tr>
                        <td><img class="mx-auto" src="/storage/{{ $juego->imagen }}" width="90px"></td>
                        <td>{{ $juego->titulo }}</td>
                        <td>{{ $juego->consola }}</td>
                        <td>{{ $juego->esrb }}</td>
                        <td>
                            <form action="{{ route('vjuegos.destroy', ['vjuego' => $juego->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('vjuegos.edit', ['vjuego' => $juego->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-400
text-white font-bold py-1 px-4 border-b-4 border-blue-700
hover:border-blue-500 rounded ">
                                    Editar
                                </a>
                                <a href="{{ route('vjuegos.show', ['vjuego' => $juego->id]) }}"
                                    class="bg-green-500 hover:bg-green-400
text-white font-bold py-1 px-4 border-b-4 border-green-700
hover:border-grenn-500 rounded mx-3">
                                    Ver
                                </a>
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-400
text-white font-bold py-1 px-4 border-b-4 border-red-700
hover:border-red-500 rounded">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
