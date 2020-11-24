<div x-data="{ open: false }" x-on:keydown.window.escape="open = false">
    <button x-on:click="open = true" type="button" class="flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-md uppercase tracking-widest text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150">
        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
        </svg>
        New Task
    </button>
    <section x-on:click.away="slideOver = false" class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
        <div x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="w-screen max-w-md" style="display: none;">
            <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                <div class="flex-1 h-0 overflow-y-auto">
                    <header class="space-y-1 py-6 px-4 bg-blue-500 sm:px-6">
                        <div class="flex items-center justify-between space-x-3">
                            <h2 class="text-lg leading-7 font-medium text-white">
                                Create a New Task
                            </h2>
                            <div class="h-7 flex items-center">
                                <button x-on:click="open = false" aria-label="Close panel" class="text-blue-200 hover:text-white focus:outline-none focus:shadow-outline-none transition ease-in-out duration-150">
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
                                    <label for="task_title" class="block text-sm font-medium leading-5 text-gray-900">
                                        Brief Summary
                                    </label>
                                    <div class="relative rounded-md shadow-sm">
                                        <input wire:model="title" id="task_title" class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150" />
                                    </div>
                                    @error('title') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                                </div>
                                <div class="space-y-1">
                                    <label for="task_description" class="block text-sm font-medium leading-5 text-gray-900">
                                        Description
                                    </label>
                                    <div class="relative rounded-md shadow-sm">
                                        <textarea wire:model="description" id="task_description" rows="4" class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150"></textarea>
                                    </div>
                                    @error('description') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                                </div>
                                <div class="space-y-1">
                                    <label for="task_unit" class="block text-sm font-medium leading-5 text-gray-900">
                                        Unit
                                    </label>
                                    <div class="relative rounded-md shadow-sm">
                                        <input wire:model="unit" id="task_unit" class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150" />
                                    </div>
                                    @error('unit') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                                </div>
                                <div class="space-y-1">
                                    <label for="task_priority" class="block text-sm font-medium leading-5 text-gray-900">
                                        Priority
                                    </label>
                                    <div class="relative rounded-md shadow-sm">
                                        <select wire:model="priority" id="task_priority" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                            <option value="low">Low</option>
                                            <option value="normal">Normal</option>
                                            <option value="high">High</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                    </div>
                                    @error('priority') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                <span class="inline-flex rounded-md shadow-sm">
                  <button x-on:click="open = false" type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancel
                  </button>
                </span>
                    <span class="inline-flex rounded-md shadow-sm">
                  <button wire:click="createTask" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                    Save
                  </button>
                </span>
                </div>
            </div>
        </div>
    </section>
</div>
