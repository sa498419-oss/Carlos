<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar consola') }}
        </h2>
    </x-slot>
    <div class="p-6 text-gray-900">
        <x-slot name="botones">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('consolas.index') }}" class="bg-lime-500 hover:bg-lime-400 text-white font-bold py-1 px-4 border-b-4 border-lime-700 hover:border-lime-500 rounded">
                    Regresar
                </a>
            </h2>
        </x-slot>
        <form class="w-full" method="POST" action="{{ route('consolas.store') }}" novalidate enctype="multipart/form-data">
            @csrf
            <div class="px-4 mx-6 mb-6">
                <label for="nombre" class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
                    Nombre de la consola
                </label>
                <input type="text" name="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nombre" placeholder="Nombre de la consola" value="{{old('nombre')}}">
                @error('nombre')
                <span class="block bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="px-4 mx-6 mb-6">
                <label for="imagen" class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
                    Elige una imagen
                </label>
                <input id="imagen" type="file"
                    class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="imagen">
                @error('imagen')
                <span class="block bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    Agregar consola
                </button>
            </div>
        </form>
    </div>
</x-app-layout>