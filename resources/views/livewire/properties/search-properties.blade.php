<div class="{{ $class }}">
    @if($label)
    <label for="properties_search" class="block text-sm font-medium leading-5 text-gray-900">
        {{ $label }}
    </label>
    @endif
    <div class="relative">
        <div class="relative rounded-md shadow-sm">
            <input id="properties_search" wire:model="search" class="form-input text-sm block w-full" autocomplete="off" />
            <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                <button wire:click="reset" type="button" class="p-1 focus:outline-none focus:shadow-outline text-xl text-gray-500"> &times; </button>
            </span>
        </div>
        @if($properties->count())
        <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
            <ul class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none">
            @foreach($properties as $property)
                <li class="hover:bg-blue-400 hover:text-white hover:cursor-pointer text-gray-900 select-none relative py-2 pl-3 pr-9">
                    {{ $property->nickname }}
                </li>
            @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
