<div>
    <x-slot name="breadcrumbs">
        <x-header.breadcrumbs>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <a href="{{ route('tenants.index') }}" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                        Tenants
                    </a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                    </svg>
                    <span aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                        {{ $tenant->name }}
                    </span>
                </div>
            </li>
        </x-header.breadcrumbs>
    </x-slot>

    <div class="space-y-8">
        <div class="max-w-3xl mx-auto lg:max-w-7xl sm:px-6">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0 flex items-center space-x-5">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <img class="h-16 w-16 rounded-full" src="https://ui-avatars.com/api/?name={{ $tenant->name }}&color=7F9CF5&background=EBF4FF" alt="">
                            <span class="absolute inset-0 shadow-sm rounded-full" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $tenant->name }}</h1>
                        <p class="text-sm font-medium text-gray-500">Applied for <a href="#" class="text-gray-900">a unit</a> on <time datetime="2020-08-25">August 25, 2020</time></p>
                    </div>
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

        <div class="max-w-3xl mx-auto lg:max-w-7xl sm:px-6">
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Subscribers
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        71,897
                    </dd>
                </div>

                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Avg. Open Rate
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        58.16%
                    </dd>
                </div>

                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Avg. Click Rate
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        24.57%
                    </dd>
                </div>
            </dl>
        </div>

        <div class="max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
            <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                <section>
                    <div class="bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h2 class="text-lg leading-6 font-medium text-gray-900">
                                Tenant Summary
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

            <section class="lg:col-start-3 lg:col-span-1">
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">
                        Activity
                    </h2>

                    <div class="mt-6 flow-root">
                        <ul class="-mb-8">
                            <li>
                                <div class="relative pb-8">

                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Applied to <a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-20">Sep 20</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">

                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/thumb-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Advanced to phone screening by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-22">Sep 22</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">

                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Completed phone screening with <a href="#" class="font-medium text-gray-900">Martha Gardner</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-28">Sep 28</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">

                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/thumb-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Advanced to interview by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-30">Sep 30</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-5 h-5 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Completed interview with <a href="#" class="font-medium text-gray-900">Katherine Snyder</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-10-04">Oct 4</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
