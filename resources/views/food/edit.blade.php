<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Editar plato de comida')}}
        </h2>
        <div class=" text-right">
            <x-button><a href="{{ route('food.index') }}">Regresar al listado</a></x-button>
        </div>
    </x-slot>

    <form action="{{route('food.update', $food)}}" method="POST">

        @csrf

        @method('put')

        <div class="flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="mt-4">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name', $food->name)}}"  />
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
                        {{old('description', $food->description)}}
                    </textarea>
                </div>
                @error('description')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="mt-4">
                    <x-label for="restaurant_id" :value="__('Restaurant_id')" />
                    <select name="restaurant_id" id="restaurant_id" class="block mt-1 w-full">
                        @foreach ($restaurants as $restaurant)
                            <option id="restaurant_id" name="restaurant_id" value="{{ $restaurant->id }}"
                                  selected = "{{ old('restaurant_id', $food->Restaurant->restaurant_id) == $restaurant->id }}" >
                                {{ old('restaurant_id', $restaurant->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('restaurant_id')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="mt-4">
                    <x-label for="price" :value="__('price')" />
                    <x-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" value="{{old('price', $food->price)}}"  />
                </div>
                @error('price')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="text-center mt-4">
                    <x-button>{{ __('Editar plato') }}</x-button>

                </div>
            </div>
        </div>
    </form>


</x-app-layout>
