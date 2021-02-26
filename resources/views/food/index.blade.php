<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Platos disponibles') }}
        </h2>
    </x-slot>

    <div class="flex flex-row justify-around mt-5">
        <span class="text-center"> as</span>
        <span class="text-center"> as</span>
        <x-button><a href="{{ route('food.new') }}">Crear nuevo plato</a></x-button>
    </div>



    {{-- <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">
            {{ trans("users.title.{$view}") }}
        </h1>
        <p>
        @if ($view == 'index')
            <a href="{{ route('users.trashed') }}" class="btn btn-outline-dark">Ver papelera</a>
            <a href="{{ route('users.create') }}" class="btn btn-dark">Nuevo usuario</a>
        @else
            <a href="{{ route('users.index') }}" class="btn btn-outline-dark">Regresar al listado de usuarios</a>
        @endif
        </p>
    </div>

    @includeWhen($view == 'index', 'users._filters') --}}

    @if ($foods->isNotEmpty())

    <div class="px-10 py-5">
        <table class="table w-full px-10 my-5">
            <thead class="text-center bg-red-200 m-4 ">
            <tr class="">
                <th scope="col">#</th>
                <th scope="col">Nombre </th>
                <th scope="col">Description </th>
                <th scope="col">Restaurant </th>
                <th scope="col">Price </th>
                <th scope="col" class="text-right th-actions">Acciones</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($foods as $food)
                <tr class="bg-green-200 ">
                    <td > {{$food->id }}</td>
                    <td > {{$food->name }}</td>
                    <td > {{$food->description }}</td>
                    <td class="text-center" > {{$food->Restaurant->name }}</td>
                    <td class="text-center"> {{$food->price }}</td>
                    <td >
                        <a href="{{ route('food.show', $food) }}">Ver</a>
                        <a href="{{ route('food.edit', $food) }}">Editar</a>
                        <form action="{{route('food.destroy', $food)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">{{ __('Eliminar') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$foods->links()}}

        {{-- {{ $users->links() }}
        <p>Viendo página {{ $users->currentPage() }} de {{ $users->lastPage() }}</p> --}}
    </div>
    @else
        <p>No hay usuarios registrados.</p>
    @endif

</x-app-layout>

