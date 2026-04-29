<x-app-layout><x-slot name="header">
        <h2 class="font-semibold text-xltext-gray-800 leading-tight">{{ $vjuego->titulo }}</h2>
    </x-slot>
    <div class="p-6 text-gray-900">
        <div class="flex flex-col sm:flex-row m-6items-center">
            <div class="basis-1/2 gridjustify-items-end "><img class="me-10" src="/storage/{{ $vjuego->imagen }}"
                    width="300px"></div>
            <div class="basis-1/2 p-6 ">
                <div class="my-3">
                    <p class="text-gray-500">Consola:</p>
                    <p class="text-xl">{{ $vjuego->consola }}</p>
                </div>
                <div class="my-3">
                    <p class="text-gray-500">ESRB:</p>
                    <p class="text-xl">{{ $vjuego->esrb }}</p>
                </div>
                <div class="my-3">
                    <p class="text-gray-500">Creadoel:</p>
                    <p class="text-xl">{{ $vjuego->created_at }}</p>
                </div>
                <div class="my-3">
                    <p class="text-gray-500">Propietario:</p>
                    <p class="text-xl">{{ $vjuego->users->name }},{{ $vjuego->users->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
