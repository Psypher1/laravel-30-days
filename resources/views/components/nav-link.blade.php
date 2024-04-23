{{-- to make other things like href, aria-label work, make use of attributes --}}

@props(['active' => false])

@php
    $name = '';
@endphp

<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
<a {{ $attributes }}
    class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a>
