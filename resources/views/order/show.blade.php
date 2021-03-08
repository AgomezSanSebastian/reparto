<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedidos') }}
        </h2>
        <div class=" text-right">
            <x-button><a href="{{ route('order.index') }}">Regresar al listado</a></x-button>
        </div>
    </x-slot>

    <div class="px-10 py-5">
        <table class="table w-full px-10 my-5">
            <thead class="text-center bg-red-200 m-4 ">
            <tr class="text-center">
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">#</th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Comida </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Cantidad </th>
                <th class="px-5 py-3 border-b-2 border-gray-500 bg-gray-400 text-center text-xs font-semibold text-gray-800 uppercase tracking-wider" scope="col">Total </th>
            </tr>
            </thead>

            <tbody>
                <?php $total= 0; ?>
                @foreach ($orders as $order)
                <tr class=" text-center bg-green-200 ">
                    <td > {{$order->id }}</td>
                    <td > {{$order->Food->name }}</td>
                    <td > {{$order->cantidad }}</td>
                    <td > {{$order->total }}</td>
                    <?php $total = $total + $order->total; ?>
                </tr>
                @endforeach
                <tr class=" text-center bg-green-400 ">
                    <td > </td>
                    <td > </td>
                    <td > </td>
                    <td >
                        <?php 
                         echo $order->total;
                         ?>
                    </td>
                </tr>
            </tbody>

        </table>

        {{$orders->links()}}
    </div>
</div>
</x-app-layout>
