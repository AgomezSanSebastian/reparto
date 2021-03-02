<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 mx-10 my-5">
           @foreach ($restaurantes as $restaurante)
                <div class="bg-blue-200 rounded">
                    <img class=" h-3/4" src="../storage/app/images/{{$restaurante->image_path}}">
                    <div class="font-serif text-xl text-center text-purple-700 font-black">{{$restaurante->name}}</div>
                    <div class="mx-3 mt-2">Dirección: {{$restaurante->street}}</div>
                    <div class="mx-3 mt-2 mb-10">Telefono: {{$restaurante->phone}}</div>
                </div>
           @endforeach

        </div>
    </div>
</x-app-layout>
