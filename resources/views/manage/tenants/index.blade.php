<x-app-layout title="Tenants">
    <div class="mt-8">
        <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
            Tenants
        </h2>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Unit
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rent Amount
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tenants as $tenant)
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <div class="flex">
                                    <a href="{{ route('manage.tenants.show', $tenant) }}" class="group inline-flex space-x-2 truncate text-sm">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: solid/user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-gray-500 truncate group-hover:text-gray-900">
                                            {{ $tenant->name }}
                                        </p>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $tenant->unit->name }}
                            </td>
                            <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                ${{ $tenant->unit->rental_amount_formatted }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6" aria-label="Pagination">
                        <div class="hidden sm:block">
                            <p class="text-sm text-gray-700">
                                Showing
                                <!-- space -->
                                <span class="font-medium">{{ $tenants->currentPage() }}</span>
                                <!-- space -->
                                to
                                <!-- space -->
                                <span class="font-medium">{{ $tenants->perPage() > $tenants->total() ? $tenants->total() : $tenants->perPage() }}</span>
                                <!-- space -->
                                of
                                <!-- space -->
                                <span class="font-medium">{{ $tenants->total() }}</span>
                                <!-- space -->
                                results
                            </p>
                        </div>
                        <div class="flex-1 flex justify-between sm:justify-end">
                            <a href="{{ $tenants->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </a>
                            <a href="{{ $tenants->nextPageUrl() }}" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
