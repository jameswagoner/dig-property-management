<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Add New Property
                </h2>
            </div>

            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ route('properties.list') }}" class="flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-sm uppercase tracking-widest text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:border-gray-700 focus:shadow-outline-blue active:bg-gray-700 transition ease-in-out duration-150">
                    <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    Cancel
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:properties.new-property />
        </div>
    </div>
</x-app-layout>
