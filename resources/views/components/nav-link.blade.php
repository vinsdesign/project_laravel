@props(['active'=>false])

<a {{ $attributes }} class="{{ $active ? 'bg-indigo-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} cursor-pointer rounded-md px-3 py-2 text-base font-medium text-white"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
