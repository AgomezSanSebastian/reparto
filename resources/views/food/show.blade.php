<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muestra plato') }}
        </h2>
    </x-slot>

    <div >
        <div class="d-flex justify-content-between align-items-end mb-3">
            <h1 class="pb-1">{{ $food->name }}</h1>

            <p><a href="{{ route('food.index') }}" class="btn btn-outline-dark btn-sm">Regresar al listado</a></p>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Detalles
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ID del usuario: {{ $food->id }}</h5>
                        <div class="card-text">
                            <p><strong>Description</strong>: {{ $food->description }}</p>
                            <p><strong>Restaurant id</strong>: {{ $food->restaurant_id }}</p>
                            <p><strong>Price</strong>: {{ $food->price }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
            </div>
        </div>
        <br>

    </div>

</x-app-layout>

