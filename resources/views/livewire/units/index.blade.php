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
                    <span class="ml-4 text-sm font-medium text-gray-500">
                        Units
                    </span>
                </div>
            </li>
        </x-header.breadcrumbs>
    </x-slot>

    <div class="max-w-3xl mx-auto lg:max-w-7xl sm:px-6">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Units
                </h2>
            </div>
        </div>
    </div>

    <div class="mt-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl">
        <div class="space-y-4">
            <div>
                {{ $units->links() }}
            </div>

            <div class="bg-white shadow-xl sm:rounded-lg">
                <ul>
                    @forelse($units as $unit)
                    <li>{{ $unit->name }}</li>
                    @empty
                    <li>No units exist</li>
                    @endforelse
                </ul>
            </div>

            <div>
                {{ $units->links() }}
            </div>
        </div>
    </div>
</div>
