@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center text-sm py-6 px-6 h-6 text-blue-600 bg-gradient-to-r from-gray-100 to-blue-400 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:bg-blue-200/50 transition duration-300 ease-in-out'
: 'flex items-center text-sm py-6 px-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded
hover:text-blue-600 hover:bg-blue-200/50 transition duration-300 ease-in-out';
@endphp

<li class="relative">
    <a {{ $attributes->merge(['class' => $classes]) }} data-mdb-ripple="true" data-mdb-ripple-color="primary">
        {{ $slot }}
    </a>
</li>
