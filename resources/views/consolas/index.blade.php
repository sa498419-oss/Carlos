<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tus consolas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid">
                    <x-slot name="botones">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('botones') }}
                        </h2>
                        <a href="{{ route('consolas.create') }}" class="bg-lime-500 hover:bg-lime-400 text-white font-bold py-1 px-4 border-b-4 border-lime-700 hover:border-lime-500 rounded">
                            Agregar consola
                        </a>
                    </x-slot>
                    <table class="table-auto text-center">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consolasUsuario as $consola)
                            <tr>
                                <td><img class="mx-auto" src="/storage/{{$consola->imagen}}" width="90px"></td>
                                <td>{{$consola->nombre}}</td>
                                <td>
                                    <form action="{{ route('consolas.destroy', ['consola' => $consola->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('consolas.edit', ['consola' => $consola->id]) }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                            Editar
                                        </a>
                                        <a href="{{ route('consolas.show', ['consola' => $consola->id]) }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-4 border-b-4 border-green-700 hover:border-green-500 rounded mx-3">
                                            Ver
                                        </a>
                                        <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                            Eliminar
                                        </button>
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
</x-app-layout>