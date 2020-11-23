<div x-data="{ open: false }" @keydown.window.escape="open = false">
    <button @click="open = true" type="button" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
        New
    </button>
    <section @click.away="slideOver = false" class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
        <div x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="w-screen max-w-md" style="display: none;">
            <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                <div class="flex-1 h-0 overflow-y-auto">
                    <header class="space-y-1 py-6 px-4 bg-indigo-700 sm:px-6">
                        <div class="flex items-center justify-between space-x-3">
                            <h2 class="text-lg leading-7 font-medium text-white">
                                Create a New Task
                            </h2>
                            <div class="h-7 flex items-center">
                                <button @click="open = false" aria-label="Close panel" class="text-indigo-200 hover:text-white focus:outline-none focus:shadow-outline-none transition ease-in-out duration-150">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" view-box="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" strokelinejoin="round" strokewidth="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm leading-5 text-indigo-300">
                                Some basic information for the task.
                            </p>
                        </div>
                    </header>
                    <div class="flex-1 flex flex-col justify-between">
                        <div class="px-4 divide-y divide-gray-200 sm:px-6">
                            <div class="space-y-6 pt-6 pb-5">
                                <div class="space-y-1">
                                    <label for="task_name" class="block text-sm font-medium leading-5 text-gray-900">
                                        Brief Summary
                                    </label>
                                    <div class="relative rounded-md shadow-sm">
                                        <input id="task_name" class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150" />
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label for="task_description" class="block text-sm font-medium leading-5 text-gray-900">
                                        Description
                                    </label>
                                    <div class="relative rounded-md shadow-sm">
                                        <textarea id="task_description" rows="4" class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                <span class="inline-flex rounded-md shadow-sm">
                  <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancel
                  </button>
                </span>
                    <span class="inline-flex rounded-md shadow-sm">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Save
                  </button>
                </span>
                </div>
            </div>
        </div>
    </section>
</div>
