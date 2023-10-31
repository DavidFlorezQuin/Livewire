<div>
    <!-- <h1>{{$user}}</h1> -->

    
    <x-input type="text" wire:model.live="name"></x-input>
    <x-button wire:click="save()">
        Save
    </x-button>
    {{ $name }}
</div>
