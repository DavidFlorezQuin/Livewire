<div>
    <form wire:submit="save">
        <x-input required wire:model="pais" placeholder="agregar un pais" />
        <x-button >Guardar</x-button>
    </form>
    <ul class="list-disc list-inside space-y-5">
        @foreach ($paises as $index => $pais)
            <li>{{$pais}}
                <x-danger-button wire:click="delete">
                    x
                </x-danger-button>
            </li>    
        @endforeach
    </ul>
</div>
