<div>
    <x-slot name="breadcrumbs">
        <x-header.breadcrumbs>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <a href="{{ route('properties.index') }}" class="ml-4 text-sm font-medium text-gray-500">
                        Properties
                    </a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <a href="{{ route('properties.show', $unit->property) }}" class="ml-4 text-sm font-medium text-gray-500">
                        {{ $unit->property->name }}
                    </a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <span class="ml-4 text-sm font-medium text-gray-500">
                        Unit {{ $unit->name }}
                    </span>
                </div>
            </li>
        </x-header.breadcrumbs>
    </x-slot>

    <div class="max-w-3xl mx-auto lg:max-w-7xl sm:px-6">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    {{ $unit->name }} {{ $unit->property->name }}
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <x-dropdrown>
                    <x-slot name="text">Actions</x-slot>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Edit</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Duplicate</a>
                    </div>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Archive</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Move</a>
                    </div>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Share</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Add to favorites</a>
                    </div>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Delete</a>
                    </div>
                </x-dropdrown>
            </div>
        </div>
    </div>

    <div class="mt-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl">
        <div class="space-y-6">
            <section>
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">
                            Unit Info
                        </h2>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        {{-- Property summary --}}
                    </div>
                </div>
            </section>

            <section>
                <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                    <div class="divide-y divide-gray-200">
                        <div class="px-4 py-5 sm:px-6">
                            <h2 id="notes-title" class="text-lg font-medium text-gray-900">Communication</h2>
                        </div>
                        <div class="px-4 py-6 sm:px-6">
                            {{-- Communication UI --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
