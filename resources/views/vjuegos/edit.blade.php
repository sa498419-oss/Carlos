<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Videojuego: {{ $vjuego->titulo }}
        </h2>
    </x-slot>
    <div class="p-6 text-gray-900">
        <x-slot name="botones">
            <a href="{{ route('vjuegos.index') }}"
                class="bg-lime-500 hover:bg-lime-400 text-white font-bold py-1 px-4
 border-b-4 border-lime-700 hover:border-lime-500 rounded">
                Regresar
            </a>
        </x-slot>
        <form class="w-full" method="POST"
            action="{{ route('vjuegos.update', ['vjuego' => $vjuego->id]) }}"
            novalidate enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Título --}}
            <div class="px-4 mx-6 mb-6">
                <label for="titulo" class="block text-gray-500 font-bold
mb-1">Título</label>
                <input type="text" name="titulo" id="titulo"
                    class="shadow border rounded w-full py-2 px-3 text-gray-700"
                    value="{{ $vjuego->titulo }}">
                @error('titulo')
                <span class="block bg-red-100 border border-red-400
text-red-700 px-3 py-2 rounded mt-1">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            {{-- Consola --}}
            <div class="px-4 mx-6 mb-6">
                <label for="consola" class="block text-gray-500 font-bold
mb-1">Consola</label>
                <input type="text" name="consola" id="consola"
                    class="shadow border rounded w-full py-2 px-3 text-gray-700"
                    value="{{ $vjuego->consola }}">
                @error('consola')
                <span class="block bg-red-100 border border-red-400
text-red-700 px-3 py-2 rounded mt-1">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            {{-- ESRB --}}
            <div class="px-4 mx-6 mb-6">
                <label for="esrb" class="block text-gray-500 font-bold
mb-1">Clasificación ESRB</label>
                <input type="text" name="esrb" id="esrb"
                    class="shadow border rounded w-full py-2 px-3 text-gray-700"
                    value="{{ $vjuego->esrb }}">
                @error('esrb')
                <span class="block bg-red-100 border border-red-400
text-red-700 px-3 py-2 rounded mt-1">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            {{-- Imagen actual + campo nuevo --}}
            <div class="px-4 mx-6 mb-6">
                <p class="block text-gray-500 font-bold mb-1">Imagen actual</p>
                <img src="/storage/{{ $vjuego->imagen }}" style="width: 200px"
                    class="mb-3">
                <label for="imagen" class="block text-gray-500 font-bold mb-1">
                    Nueva imagen (opcional)
                </label>
                <input id="imagen" type="file" name="imagen"
                    class="shadow border border-gray-500 rounded w-full py-2
px-3 text-gray-700">
            </div>
            <div class="mb-6 py-5 px-4 mx-6">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold
py-1 px-4
 border-b-4 border-blue-700 hover:border-blue-500
rounded">
                    Guardar cambios
                </button>
            </div>
        </form>
    </div>
</x-app-layout>