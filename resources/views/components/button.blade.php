<a
    {{ $attributes->merge([
        'class' => 'relative inline-flex items-center px-2 py-2 -ml-px
                                                text-base font-medium text-gray-600 bg-white border-2 border-gray-300
                                                rounded-r-md leading-5 hover:text-gray-800 focus:z-10 focus:outline-none
                                                focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100
                                                active:text-gray-500 transition ease-in-out duration-150 
                                               ',
    ]) }}>{{ $slot }}</a>
