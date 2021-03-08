<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-10 py-5">
        <h1 class="text-center text-4xl">Today:</h1>
        <div class="px-5 py-3 border-2 border-gray-500 bg-gray-300 text-xs font-semibold text-gray-800 uppercase tracking-wider">
            {{$we->today->p}} 
        </div>
    </div>

    <div class="px-10 py-5">
        <h1 class="text-center text-4xl">Tomorrow:</h1>
        <div class="px-5 py-3 border-2 border-gray-500 bg-gray-300 text-xs font-semibold text-gray-800 uppercase tracking-wider">
            {{$we->tomorrow->p}} 
        </div>
    </div>

</x-app-layout>
