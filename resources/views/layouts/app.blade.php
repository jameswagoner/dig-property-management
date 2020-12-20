<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header x-data="{ open: false }" class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex px-2 lg:px-0">
                        <x-header.navigation />
                    </div>
                    <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                        <x-header.search />
                    </div>
                    <div class="flex items-center lg:hidden">
                        <x-header.mobile-menu />
                    </div>
                    <div class="hidden lg:ml-4 lg:flex lg:items-center">
                        <livewire:notifications.bell />

                        <x-header.profile-dropdown />
                    </div>
                </div>
            </div>

            <x-header.breadcrumbs />
        </header>

        <main class="py-10">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>
</html>