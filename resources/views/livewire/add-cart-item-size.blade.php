<div x-data>
    <p class="text-gray-700 mb-4">Stock disponible:
        <span class="font-semibold text-lg">{{$quantity}}</span>
    </p>
    <div>
        <p class="text-xl text-gray-700">Talla:</p>
        <select wire:model="size_id" class="select-custom w-full">
            <option value="" selected disabled>Seleccionar una Talla</option>
            @foreach ($sizes as $size)
            <option value="{{$size->id}}">{{$size->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-2">
        <p class="text-xl text-gray-700">Color:</p>
        <select wire:model="color_id" class="select-custom w-full">
            <option value="" selected disabled>Seleccionar un color</option>
            @foreach ($colors as $color)
            <option class="capitalize" value="{{$color->id}}">{{__($color->name)}}</option>
            @endforeach
        </select>
    </div>

    <div class="flex items-center mt-4">
        <div class="mr-4">
            <x-jet-secondary-button 
                disabled 
                x-bind:disabled="$wire.qty <= 1" 
                wire:loading.attr="disabled"
                wire:target="decrement"
                wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-gray-700">{{$qty}}</span>
            <x-jet-secondary-button
                disabled 
                x-bind:disabled="$wire.qty >= $wire.quantity" 
                wire:loading.attr="disabled"
                wire:target="increment"
                wire:click="increment"
            >
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-button 
            x-bind:disabled="!$wire.quantity" 
            class="w-full" 
            color="orange">
                Agregar al carrito de compras
            </x-button>
        </div>
    </div>
</div>