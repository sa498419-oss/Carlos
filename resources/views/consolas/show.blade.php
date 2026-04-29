<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $consola->nombre }}
        </h2>
    </x-slot>
    <div class="p-6 text-gray-900">
        <div class="flex flex-col sm:flex-row m-6 items-center">
            <div class="basis-1/2 grid justify-items-end">
                <img class="me-10" src="/storage/{{$consola->imagen}}" width="300px">
            </div>
            <div class="basis-1/2 p-6">
                <div class="my-3">
                    <p class="text-gray-500">Nombre:</p>
                    <p class="text-xl">{{ $consola->nombre }}</p>
                </div>
                <div class="my-3">
                    <p class="text-gray-500">Creado el:</p>
                    <p class="text-xl">{{ $consola->created_at }}</p>
                </div>
                <div class="my-3">
                    <p class="text-gray-500">Propietario:</p>
                    <p class="text-xl">{{ $consola->users->name }}, {{ $consola->users->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>