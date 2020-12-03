<div x-data="{ open: $wire.entangle('open'), query: $wire.entangle('query') }" class="{{ $class }}">
    @if($label)
    <label for="properties_search" class="block text-sm font-medium leading-5 text-gray-900">
        {{ $label }}
    </label>
    @endif
    <div class="relative">
        <div class="relative rounded-md shadow-sm">
            <input wire:model.debounce.500ms="query" wire:keydown.escape="clear" id="properties_search" class="form-input text-sm block w-full" autocomplete="off" />
            <span x-show="query" class="absolute inset-y-0 right-0 flex items-center pr-4">
                <span wire:click="clear" class="cursor-pointer p-1 text-xl text-gray-500"> &times; </span>
            </span>
        </div>
        <div x-show="open" class="absolute z-10 mt-1 w-full rounded-md bg-white shadow-lg">
            <ul class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none">
            @foreach($properties as $property)
                <li wire:click="selectProperty({{ $property->id }})" class="hover:bg-blue-400 hover:text-white hover:cursor-pointer text-gray-900 select-none relative py-2 pl-3 pr-9">
                    {{ $property->nickname }}
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
