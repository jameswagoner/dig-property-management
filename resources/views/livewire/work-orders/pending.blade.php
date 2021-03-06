<div>
    <x-slot name="breadcrumbs">
        <x-header.breadcrumbs>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <span class="ml-4 text-sm font-medium text-gray-500">
                        <a href="{{ route('work-orders.index') }}">Work Orders</a>
                    </span>
                    <svg class="ml-4 flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <span class="ml-4 text-sm font-medium text-gray-500">
                        Incoming Requests
                    </span>
                </div>
            </li>
        </x-header.breadcrumbs>
    </x-slot>

    <div class="max-w-3xl mx-auto lg:max-w-7xl sm:px-6">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Incoming Requests
                </h2>
            </div>
        </div>
    </div>

    <div class="mt-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl">
        <div class="space-y-4">

            <div class="bg-white shadow-xl sm:rounded-lg">
                <ul class="relative z-0 divide-y divide-gray-200 border-b border-gray-200">
                    @foreach($incomingRequests as $incomingRequest)
                        <li class="relative pl-4 pr-6 py-5 hover:bg-gray-50 sm:py-6 sm:pl-6 lg:pl-8 xl:pl-6">
                            <div class="flex items-center justify-between space-x-4">
                                <!-- Task summary -->
                                <div class="min-w-0 space-y-3">
                                    <div class="flex items-center space-x-3">
                                        @if ($incomingRequest->user)
                                        <span class="h-4 w-4 bg-green-100 rounded-full flex items-center justify-center">
                                            <span class="h-2 w-2 bg-green-400 rounded-full"></span>
                                        </span>
                                        @else
                                        <span class="h-4 w-4 bg-blue-100 rounded-full flex items-center justify-center">
                                            <span class="h-2 w-2 bg-blue-400 rounded-full"></span>
                                        </span>
                                        @endif

                                        <span class="block">
                                            <h2 class="text-sm font-bold leading-5">
                                                {{ $incomingRequest->tenant->name }}
                                            </h2>
                                        </span>
                                    </div>
                                    <div class="relative group flex items-center space-x-2.5">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        <div class="text-sm leading-5 text-gray-500 group-hover:text-gray-900 font-medium truncate">
                                            {{ $incomingRequest->number }}
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:hidden">
                                    <!-- Heroicon name: chevron-right -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <!-- Task meta info -->
                                <div class="hidden sm:flex flex-col flex-shrink-0 items-end space-y-3">
                                    <p class="flex items-center text-sm space-x-2">
                                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        @if ($incomingRequest->user)
                                        <span>{{ $incomingRequest->user->name }}</span>
                                        @else
                                        <span>Not Claimed</span>
                                        @endif
                                    </p>
                                    <p class="flex text-gray-500 text-sm leading-5 space-x-2">
                                        <span class="flex space-x-1">
                                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ Str::title($incomingRequest->type) }}</span>
                                        </span>
                                        <span>&middot;</span>
                                        <span class="flex space-x-1">
                                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Normal</span>
                                        </span>
                                        <span>&middot;</span>
                                        <span class="flex space-x-1">
                                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ $incomingRequest->created_at->diffForHumans() }}</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>
