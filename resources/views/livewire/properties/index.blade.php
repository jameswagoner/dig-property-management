<div>
    <x-slot name="breadcrumbs">
        <x-header.breadcrumbs>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <span class="ml-4 text-sm font-medium text-gray-500">
                        Properties
                    </span>
                </div>
            </li>
        </x-header.breadcrumbs>
    </x-slot>

    <div class="max-w-3xl mx-auto lg:max-w-7xl sm:px-6">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Properties
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <livewire:properties.create />
            </div>
        </div>
    </div>

    <div class="mt-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl">
        <div class="space-y-4">
            <div>
                {{ $properties->links() }}
            </div>

            <div class="bg-white shadow-xl sm:rounded-lg">
                <ul class="divide-y divide-gray-200">
                    @foreach($properties as $property)
                        <li>
                            <a href="{{ route('properties.show', $property) }}" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-orange-600 truncate">
                                            {{ $property->name }}
                                        </p>
                                        <div class="ml-2 flex-shrink-0 flex">
                                            @if (true)
                                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Rented
                                                </p>
                                            @else
                                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Vacant
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                            <!-- Heroicon name: location-marker -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                            </svg>
                                            {{ $property->full_address }}
                                        </p>
                                        <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                            Monthly Rent <span class="ml-1 font-semibold">$0.00</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                {{ $properties->links() }}
            </div>
        </div>
    </div>
</div>
