@props(['active' => false, 'type' => 'a'])



<div class="relative group">
    @if  ($type === "a")
        <a class="{{ $active ? 'text-gray-400' : 'text-white' }} 'transition-all duration-300 ease-out'"
            aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>
            {{ $slot }}
        </a>
    @else
        <button class="{{ $active ? 'text-gray-400' : 'text-white' }} 'transition-all duration-300 ease-out'"
            aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>
            {{ $slot }}
        </button>
    @endif
    <span
        class="{{ $active ? 'w-[120%]' : 'w-0' }}
                 absolute left-1/2 -translate-x-1/2 bottom-0 h-[2px]
                 bg-gray-400 transition-all duration-300 ease-out
                 group-hover:w-[120%]"></span>
</div>