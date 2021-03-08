<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 mx-10 my-5">
           @foreach ($restaurantes as $restaurante)
                <article class="overflow-hidden rounded-lg shadow-lg bg-blue-200">
                    <img class="h-3/4" src="../storage/app/images/{{$restaurante->image_path}}">
                    <div class="font-serif text-xl text-center text-purple-800 font-black">{{$restaurante->name}}</div>
                    <div class="mx-3 mt-2">Dirección: {{$restaurante->street}}</div>
                    <div class="mx-3 mt-2 mb-10">Telefono: {{$restaurante->phone}}</div>

                </article>
           @endforeach

        </div>
    </div>
</x-app-layout>
