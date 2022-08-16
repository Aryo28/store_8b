@props(['color' => 'gray'])


@php 

    switch($color){
            case 'orange':
                $var = 'justify-center inline-flex items-center px-4 py-2 bg-orange-500 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition';
            break;

            default:
                $var = 'justify-center inline-flex items-center px-4 py-2 bg-gray-500 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition';
            break;
    }

@endphp


<button {{ $attributes->merge(['type' => 'submit', 'class' => $var]) }}>
    {{ $slot }}
</button>
