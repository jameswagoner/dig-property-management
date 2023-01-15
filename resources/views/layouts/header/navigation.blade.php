<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        {{-- Sidebar component, swap this element with another sidebar if you like --}}
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

                    <a href="{{ route('manage.dashboard') }}"
                       class="{{ Arr::toCssClasses([
                            'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md',
                            'text-steel-100 hover:text-white hover:bg-steel-600' => Route::currentRouteName() !== 'manage.dashboard',
                            'bg-steel-800 text-white' => Route::currentRouteName() === 'manage.dashboard'
                        ]) }}"
                    >
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('manage.communication.inbox') }}"
                       class="{{ Arr::toCssClasses([
                            'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md',
                            'text-steel-100 hover:text-white hover:bg-steel-600' => !Str::contains(Route::currentRouteName(), 'manage.communication.'),
                            'bg-steel-800 text-white' => Str::contains(Route::currentRouteName(), 'manage.communication.')
                        ]) }}"
                    >
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" x-description="Heroicon name: outline/chat-alt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                        Communication
                    </a>

                    <a href="{{ route('manage.labor.index') }}"
                       class="{{ Arr::toCssClasses([
                            'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md',
                            'text-steel-100 hover:text-white hover:bg-steel-600' => !Str::contains(Route::currentRouteName(), 'manage.labor.'),
                            'bg-steel-800 text-white' => Str::contains(Route::currentRouteName(), 'manage.labor.')
                        ]) }}"
                    >
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        Labor Expenses
                    </a>

                    <a href="{{ route('manage.payments.index') }}"
                       class="{{ Arr::toCssClasses([
                            'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md',
                            'text-steel-100 hover:text-white hover:bg-steel-600' => !Str::contains(Route::currentRouteName(), 'manage.payments.'),
                            'bg-steel-800 text-white' => Str::contains(Route::currentRouteName(), 'manage.payments.')
                        ]) }}"
                    >
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Payments
                    </a>

                    <a href="{{ route('manage.units.index') }}"
                       class="{{ Arr::toCssClasses([
                            'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md',
                            'text-steel-100 hover:text-white hover:bg-steel-600' => !Str::contains(Route::currentRouteName(), 'manage.units.'),
                            'bg-steel-800 text-white' => Str::contains(Route::currentRouteName(), 'manage.units.')
                        ]) }}"
                    >
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Units
                    </a>

                    <a href="{{ route('manage.tenants.index') }}"
                       class="{{ Arr::toCssClasses([
                            'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md',
                            'text-steel-100 hover:text-white hover:bg-steel-600' => !Str::contains(Route::currentRouteName(), 'manage.tenants.'),
                            'bg-steel-800 text-white' => Str::contains(Route::currentRouteName(), 'manage.tenants.')
                        ]) }}"
                    >
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-steel-200" x-description="Heroicon name: outline/user-group" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Tenants
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
