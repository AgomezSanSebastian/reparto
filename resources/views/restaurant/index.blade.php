<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 mx-10 my-5">
           @foreach ($restaurantes as $restaurante)
                <div class="bg-blue-200">                    
                    <img src="../storage/app/images/{{$restaurante->image_path}}">
                    {{$restaurante}}
                </div>
           @endforeach

        </div>
    </div>
</x-app-layout>
