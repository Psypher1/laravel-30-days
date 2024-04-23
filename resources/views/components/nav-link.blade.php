{{-- to make other things like href, aria-label work, make use of attributes --}}

@props(['active' => false, 'type' => 'a'])

@php
    $name = '';
@endphp

@if ($type === 'a')
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>
@else
    <button
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 border border-gray-500 font-semibold hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</button>
@endif


{{-- What it gets compiled to  --}}
{{-- <?php if ($type === 'a') : ?>
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>
<?php else:?>
<button {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</button>
<?php endif?> --}}





{{-- We can get away with is but not good --}}
{{-- <{{ $type }} {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</{{ $type }}> --}}



{{-- Alternate Link --}}
{{-- <a {{ $attributes }}
    class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a> --}}
