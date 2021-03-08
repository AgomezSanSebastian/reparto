<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedidos') }}
        </h2>
        <div class=" text-right">
            <x-button><a href="{{ route('order.index') }}">Regresar al listado</a></x-button>
        </div>
    </x-slot>

    <form action="{{route('order.store')}}" method="POST">
        @csrf
        <div class="flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="mt-4">
                    <x-label for="street" :value="__('Street')" />
                    <x-input id="street" class="block mt-1 w-full" type="text" name="street" value="{{old('street')}}"  />
                </div>
                @error('street')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <div class="mt-4">
                    <x-label for="phone" :value="__('Phone')" />
                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{old('phone')}}"  />
                </div>
                @error('phone')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="mt-4">
                    <x-label for="food_id" :value="__('Food')" />
                    <select name="food_id" id="food_id" class="block mt-1 w-full">
                        <option value="">Selecciona lo que deseas comer</option>
                        @foreach ($foods as $food)
                            <option id="food_id" name="food_id" value="{{ $food->id }}">{{ $food->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('food_id')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <div class="mt-4">
                    <x-label for="cantidad" :value="__('Cantidad')" />
                    <x-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" value="{{old('cantidad')}}"  />
                </div>
                @error('cantidad')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="text-center mt-4">
                    <x-button>{{ __('Agregar plato') }}</x-button>
                </div>
            </div>
        </div>
    </form>

</x-app-layout>
