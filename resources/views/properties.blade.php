<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Properties
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                @livewire('properties.new-property')
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('properties.list-properties')
        </div>
    </div>
</x-app-layout>