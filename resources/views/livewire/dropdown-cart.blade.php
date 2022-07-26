<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger" >
            <x-shopcar color="white" size="30"/>
            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
        </x-slot>
        <x-slot name="content">
           <p class="text-center text-gray-700">
                <div class="py-6 px-4">
                    No items added to shopping cart
                </div>
            </p> 
        </x-slot>
    </x-jet-dropdown>
</div>
