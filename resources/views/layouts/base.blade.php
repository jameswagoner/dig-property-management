<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased font-sans bg-gray-200 overflow-hidden">
<div>
    <div style="min-height: 640px;">

        <div
            x-data="{ open: false }"
            x-on:keydown.window.escape="open = false"
            class="relative h-screen flex overflow-hidden bg-gray-100">

            <!-- Mobile Menu -->
            <div
                x-show="open"
                class="fixed inset-0 flex z-40 lg:hidden"
                x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state."
                x-ref="dialog"
                aria-modal="true"
                style="display: none;">

                <div
                    x-show="open"
                    x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
                    x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-gray-600 bg-opacity-75"
                    x-on:click="open = false"
                    aria-hidden="true"
                    style="display: none;">
                </div>

                <div
                    x-show="open"
                    x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                    x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="-translate-x-full"
                    class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-steel-700"
                    style="display: none;">

                    <div
                        x-show="open"
                        x-description="Close button, show/hide based on off-canvas menu state."
                        x-transition:enter="ease-in-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in-out duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-0 right-0 -mr-12 pt-2"
                        style="display: none;">
                        <button
                            type="button"
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            x-on:click="open = false">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex-shrink-0 flex items-center px-4">
                        <img class="h-8 w-auto" src="{{ asset('images/logo-white.svg') }}" alt="DIG logo">
                    </div>
                    <nav class="mt-5 flex-shrink-0 h-full divide-y divide-steel-800 overflow-y-auto" aria-label="Sidebar">
                        <div class="px-2 space-y-1">

                            <a href="#"
                               class="bg-steel-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                               x-state:on="Current" x-state:off="Default" aria-current="page"
                               x-state-description="Current: &quot;bg-steel-800 text-white&quot;, Default: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Home
                            </a>

                            <a href="#"
                               class="text-steel-100 hover:text-white hover:bg-steel-600 group flex items-center px-2 py-2 text-base font-medium rounded-md"
                               x-state-description="undefined: &quot;bg-steel-800 text-white&quot;, undefined: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" x-description="Heroicon name: outline/clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                History
                            </a>

                        </div>
                        <div class="mt-6 pt-6">
                            <div class="px-2 space-y-1">

                                <a href="#"
                                   class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-steel-100 hover:text-white hover:bg-steel-600">
                                    <svg class="mr-4 h-6 w-6 text-steel-200" x-description="Heroicon name: outline/cog"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Settings
                                </a>

                                <a href="#"
                                   class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-steel-100 hover:text-white hover:bg-steel-600">
                                    <svg class="mr-4 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/question-mark-circle"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Help
                                </a>

                                <a href="#"
                                   class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-steel-100 hover:text-white hover:bg-steel-600">
                                    <svg class="mr-4 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/shield-check"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    Privacy
                                </a>

                            </div>
                        </div>
                    </nav>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex lg:flex-shrink-0">
                <div class="flex flex-col w-64">
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <div class="flex flex-col flex-grow bg-steel-700 pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="h-8 w-auto"
                                 src="{{ asset('images/logo-white.svg') }}"
                                 alt="DIG logo">
                            <span class="ml-2 font-medium text-xl text-white">DIG</span>
                        </div>
                        <nav class="mt-5 flex-1 flex flex-col divide-y divide-steel-800 overflow-y-auto"
                             aria-label="Sidebar">
                            <div class="px-2 space-y-1">

                                <a href="#"
                                   class="bg-steel-800 text-white group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
                                   x-state:on="Current" x-state:off="Default" aria-current="page"
                                   x-state-description="Current: &quot;bg-steel-800 text-white&quot;, Default: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                    <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    Home
                                </a>

                                <a href="#"
                                   class="text-steel-100 hover:text-white hover:bg-steel-600 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
                                   x-state-description="undefined: &quot;bg-steel-800 text-white&quot;, undefined: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                    <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/clock" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    History
                                </a>

                                <a href="#"
                                   class="text-steel-100 hover:text-white hover:bg-steel-600 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
                                   x-state-description="undefined: &quot;bg-steel-800 text-white&quot;, undefined: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                    <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/scale" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                    </svg>
                                    Balances
                                </a>

                                <a href="#"
                                   class="text-steel-100 hover:text-white hover:bg-steel-600 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
                                   x-state-description="undefined: &quot;bg-steel-800 text-white&quot;, undefined: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                    <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/credit-card"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                    Cards
                                </a>

                                <a href="#"
                                   class="text-steel-100 hover:text-white hover:bg-steel-600 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
                                   x-state-description="undefined: &quot;bg-steel-800 text-white&quot;, undefined: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                    <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/user-group"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Recipients
                                </a>

                                <a href="#"
                                   class="text-steel-100 hover:text-white hover:bg-steel-600 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
                                   x-state-description="undefined: &quot;bg-steel-800 text-white&quot;, undefined: &quot;text-steel-100 hover:text-white hover:bg-steel-600&quot;">
                                    <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200"
                                         x-description="Heroicon name: outline/document-report"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Reports
                                </a>

                            </div>
                            <div class="mt-6 pt-6">
                                <div class="px-2 space-y-1">

                                    <a href="#"
                                       class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-steel-100 hover:text-white hover:bg-steel-600">
                                        <svg class="mr-4 h-6 w-6 text-steel-200"
                                             x-description="Heroicon name: outline/cog"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Settings
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-steel-100 hover:text-white hover:bg-steel-600">
                                        <svg class="mr-4 h-6 w-6 text-steel-200"
                                             x-description="Heroicon name: outline/question-mark-circle"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Help
                                    </a>

                                    <a href="#"
                                       class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-steel-100 hover:text-white hover:bg-steel-600">
                                        <svg class="mr-4 h-6 w-6 text-steel-200"
                                             x-description="Heroicon name: outline/shield-check"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                        Privacy
                                    </a>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Content Pane -->
            <div class="flex-1 overflow-auto focus:outline-none">
                <!-- Header Menu -->
                <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
                    <!-- Mobile Menu button -->
                    <button type="button"
                            class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-steel-500 lg:hidden"
                            @click="open = true">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu-alt-1"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h8m-8 6h16"></path>
                        </svg>
                    </button>


                    <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                        <div class="flex-1 flex">
                            <!-- Search -->
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                <label for="search-field" class="sr-only">Search</label>
                                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none"
                                         aria-hidden="true">
                                        <svg class="h-5 w-5" x-description="Heroicon name: solid/search"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="search-field" name="search-field"
                                           class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm"
                                           placeholder="Search transactions" type="search">
                                </div>
                            </form>
                        </div>

                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Notification -->
                            <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-steel-500">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div
                                x-data="dropdown"
                                x-on:click.outside="onClickAway($event)"
                                class="ml-3 relative">
                                <div>
                                    <button
                                        id="user-menu-button"
                                        x-ref="button"
                                        type="button"
                                        class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-steel-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50"
                                        x-on:click="onButtonClick()"
                                        aria-expanded="false"
                                        aria-haspopup="true"
                                        x-bind:aria-expanded="open.toString()">
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block">
                                            <span class="sr-only">Open user menu for </span>Emilia Birch</span>
                                        <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div
                                    x-show="open"
                                    x-ref="menu-items"
                                    x-description="Dropdown menu, show/hide based on menu state."
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    x-bind:aria-activedescendant="activeDescendant"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="user-menu-button"
                                    tabindex="-1"
                                    style="display: none;">
                                    <a
                                        href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        x-state:on="Active"
                                        x-state:off="Not Active"
                                        x-bind:class="{ 'bg-gray-100': activeIndex === 0 }"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0"
                                        x-on:mouseenter="activeIndex = 0"
                                        x-on:mouseleave="activeIndex = -1"
                                        x-on:click="open = false; focusButton()">
                                        Your Profile
                                    </a>
                                    <a
                                        href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        x-bind:class="{ 'bg-gray-100': activeIndex === 2 }"
                                        role="menuitem" tabindex="-1"
                                        id="user-menu-item-2"
                                        x-on:mouseenter="activeIndex = 2"
                                        x-onmouseleave="activeIndex = -1"
                                        x-on:click="open = false; focusButton()">
                                        Logout
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <main class="flex-1 relative pb-8 z-0 overflow-y-auto">

                    <!-- Page header -->
                    <div class="bg-white shadow">
                        <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                            <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center">
                                        <img class="hidden h-16 w-16 rounded-full sm:block" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        <div>
                                            <div class="flex items-center">
                                                <img class="h-16 w-16 rounded-full sm:hidden" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80" alt="">
                                                <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                                    Emilia Birch
                                                </h1>
                                            </div>
                                            <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                                                <dt class="sr-only">Company</dt>
                                                <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                         x-description="Heroicon name: solid/office-building"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                              d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                    Duke street studio
                                                </dd>
                                                <dt class="sr-only">Account status</dt>
                                                <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" x-description="Heroicon name: solid/check-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Verified account
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-steel-500">
                                        Add money
                                    </button>
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-steel-600 hover:bg-steel-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-steel-500">
                                        Send money
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page Content -->
                    <div class="mt-8">
                        <!-- Section -->
                        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h2 class="text-lg leading-6 font-medium text-gray-900">Section Title</h2>
                            <div class="mt-2">
                                <!-- Section Content -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>
</div>
</body>
</html>
