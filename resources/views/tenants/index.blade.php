<x-app-layout>
    <x-slot name="breadcrumbs">
        <x-header.breadcrumbs>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <span aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                        Tenants
                    </span>
                </div>
            </li>
        </x-header.breadcrumbs>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <livewire:tenants.index />
    </div>
</x-app-layout>
