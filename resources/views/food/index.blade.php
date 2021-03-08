<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Platos disponibles') }}
        </h2>
    </x-slot>

    <div class="flex flex-row justify-around mt-5">
        <form method="GET" class="form-inline" action="{{ route('food.customindex') }}">
            @csrf
            <input name="buscaporcomida" class="mt-1 mb-1 form-control rounded-lg border border-purple-600 w-50 h-11" type="search" placeholder="nombre del plato" aria-label="Search">

            <button class="mt-1 mb-1font-bold p-2 bg-green-400 text-lg  shadow-md rounded-lg h-11" type="submit">Buscar</button>
        </form>
        <x-button><a href="{{ route('food.new') }}">Crear nuevo plato</a></x-button>
    </div>


    @if ($foods->isNotEmpty())

    <div class="px-10 py-5">
        <table class="min-w-full leading-normal">
            <thead class="text-center bg-red-200 m-4 ">
            <tr class="">
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">#</th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Nombre </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Description </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Restaurant </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Price </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col" class="text-right th-actions">Acciones</th>
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
                            {{-- <a href="{{ route('food.show', $food) }}">Ver</a> --}}
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

