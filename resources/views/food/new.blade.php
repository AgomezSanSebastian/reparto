<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Nuevo plato de comida')}}
        </h2>
    </x-slot>

    <form action="{{route('food.store')}}" method="POST">

        @csrf

        <div class="flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="mt-4">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}"  />
                </div>
                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="mt-4">
                    <x-label for="description" :value="__('Description')" />
                    <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" >
                        {{old('description')}}
                    </textarea>
                </div>
                @error('description')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="mt-4">
                    <x-label for="restaurant_id" :value="__('Restaurant')" />
                    <select name="restaurant_id" id="restaurant_id" class="block mt-1 w-full">
                        <option value="">Selecciona un restaurante</option>
                        @foreach ($restaurants as $restaurant)
                            <option id="restaurant_id" name="restaurant_id" value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                        @endforeach
                    </select>

                </div>
                @error('restaurant_id')
                    <br>
                    <small>*{{$restaurant_id}}</small>
                    <br>
                @enderror

                <div class="mt-4">
                    <x-label for="price" :value="__('Price')" />
                    <x-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" value="{{old('price')}}"  />
                </div>
                @error('price')
                    <br>
                    <small>*{{$price}}</small>
                    <br>
                @enderror

                <div class="text-center mt-4">
                    <x-button>{{ __('Agregar plato') }}</x-button>
                    <x-button><a href="{{ route('food.index') }}">Regresar al listado</a></x-button>
                </div>
            </div>
        </div>
    </form>

</x-app-layout>

