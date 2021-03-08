<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- {{ $we->municipios[0]}} --}}
        {{-- @for($i = 0; $i < 30; $i++)
            {{$we->municipios[$i]}};
        @endfor --}}
        {{-- @foreach($we->municipios[0] as $tiempo)
            {{ $tiempo }};
        @endforeach --}}
         {{$we->today->p}} 
        
    </div>

    {{-- <div class="px-10 py-5">
        <table class="table w-full px-10 my-5">
            <thead class="text-center bg-red-200 m-4 ">
            <tr class="text-center">
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">#</th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Street </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Phone </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Price </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col" >Acciones</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                <tr class=" text-center bg-green-200 ">
                    <td > {{$order->id }}</td>
                    <td > {{$order->street }}</td>
                    <td > {{$order->phone }}</td>
                    <td class="text-center" > {{$order->total }}</td>
                    <td > <a href="{{ route('order.show', $order) }}">Ver</a>  </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$orders->links()}}


    </div> --}}
</x-app-layout>
