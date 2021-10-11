<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}{{ $title ? " | $title" : '' }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

    @livewireStyles
</head>
<body class="antialiased font-sans bg-gray-200 overflow-hidden">
<div>
    <div style="min-height: 640px;">

        <div
            x-data="{ sidebar: false }"
            x-on:keydown.window.escape="sidebar = false"
            class="relative h-screen flex overflow-hidden bg-gray-100">

            <x-header.mobile-menu />

            <x-header.navigation />

            <!-- Content Pane -->
            <div class="flex-1 overflow-auto focus:outline-none">
                <x-header.topbar />

                <!-- Main Content -->
                <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                    {{ $pageHeader ?? '' }}

                    <div class="mt-8">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

    </div>
</div>
@livewireScripts
</body>
</html>
