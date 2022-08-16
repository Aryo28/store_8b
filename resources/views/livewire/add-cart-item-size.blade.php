<div x-data>

    <p class="text-xl text-gray-700">Size:</p>

    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">In Stock: <strong>{{ $quantity }}</strong></span>
    </p>

    <select  wire:model="size_id" class="form-control w-full my-4">
        <option value="" selected disabled>Choose a size</option>
        @foreach($sizes as $size)
            <option value="{{$size->id}}">{{$size->name}}</option>
        @endforeach
    </select>

    <select wire:model="color_id" class="form-control w-full" name="" id="">
        <option value="" selected disabled>Pick a Color</option>
        @foreach ($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
        @endforeach
    </select>

    <div class="flex mt-4">
        <div>
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty<=1"
            wire:loading.attr="disable"
            wire:target="decrement"
            wire:click="decrement">
            -
        </x-jet-secondary-button>
        <span class="mx-2 text-gray-700">{{$qty}}</span>
        <x-jet-secondary-button
        disabled
        x-bind:disabled="$wire.qty>=$wire.quantity"
        wire:loading.attr="increment"
        wire:target="increment" 
        wire:click="increment">
            +
        </x-jet-secondary-button>
    </div>

    <div class="flex-1 ml-4">
        <x-button class="w-full" color="orange"
        x-bind:disabled="!$wire.quantity"
        >
            Add to cart
        </x-button>
    </div>
</div>