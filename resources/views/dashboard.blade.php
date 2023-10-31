<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" w-3/4 px-20 py-6 flex justify-center">
        @livewire('paises')
    </div>
</x-app-layout>
