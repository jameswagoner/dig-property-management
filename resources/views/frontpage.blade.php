<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIG Investment Group</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="antialiased font-sans bg-swiss-coffee">
    <div x-data="{ open: false }" class="relative bg-swiss-coffee overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="h-screen relative z-10 sm:pt-5 pb-8 bg-swiss-coffee sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-swiss-coffee transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#">
                                    <span class="sr-only">DIG Investment Group</span>
                                    <img class="h-18 w-auto sm:h-24" src="{{ asset('images/logo.svg') }}">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button @click="open = true" type="button" class="bg-swiss-coffee rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none" id="main-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                                        <span class="sr-only">Open main menu</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                            <a href="#" class="font-medium text-steel-700 hover:text-azure">Properties</a>
                            <a href="#" class="font-medium text-steel-700 hover:text-azure">Company</a>

                            <a href="#" class="font-medium text-azure">Tenants</a>
                        </div>
                    </nav>
                </div>

                <div x-show="open" x-description="Mobile menu, show/hide based on menu open state." x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" style="display: none;">
                    <div class="rounded-lg shadow-md bg-swiss-coffee ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-12 w-auto" src="{{ asset('images/logo.svg') }}" alt="DIG Investment Group">
                            </div>
                            <div class="-mr-2">
                                <button @click="open = false" type="button" class="bg-swiss-coffee rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500">
                                    <span class="sr-only">Close main menu</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-steel-700 hover:text-azure" role="menuitem">Properties</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-steel-700 hover:text-azure" role="menuitem">Company</a>

                            </div>
                            <div role="none">
                                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-white bg-neptune hover:bg-azure" role="menuitem">
                                    Tenants
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-azure sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Move/Forward</span>
                            <!-- space -->
                            <span class="block text-steel-700 xl:inline">welcome home</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            We believe everyone deserves a place to call home. Get in touch with us today to see what properties are available.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="tel:8005551232" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-steel-700 md:py-4 md:text-lg md:px-10">
                                    Call 1.800.555.1232
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="mailto:properties@deplorablesinvestmentgroup.com" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-neptune md:py-4 md:text-lg md:px-10">
                                    Send us an email
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1542037104857-ffbb0b9155fb?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1550&q=80" alt="">
        </div>
    </div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
