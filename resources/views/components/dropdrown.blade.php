<div x-data="{ open: false }" x-on:click.away="open = false" x-on:keydown.escape="open = false" class="relative inline-block text-left">
    <div>
        <button x-on:click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none" id="actions-menu" aria-haspopup="true" aria-expanded="true">
            {{ $text }}
            <!-- Heroicon name: chevron-down -->
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div x-show="open" x-cloak class="origin-top-right absolute z-10 right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="actions-menu"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-from="transform opacity-0 scale-95"
         x-transition:enter-to="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-from="transform opacity-100 scale-100"
         x-transition:leave-to="transform opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>