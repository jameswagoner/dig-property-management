<div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Add New Staff Member
            </h2>
        </div>
    </div>

    <div class="px-6 bg-white shadow sm:rounded-lg">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Personal Information
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            First name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" wire:model.defer="first_name" id="first_name" class="max-w-lg block w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Last name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" wire:model.defer="last_name" id="last_name" class="max-w-lg block w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="number" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Phone Number
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input id="number" wire:model.defer="number" type="tel" class="block max-w-lg w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Email address
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input id="email" wire:model.defer="email" type="email" class="block max-w-lg w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Password
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input id="password" wire:model.defer="password" type="text" class="block max-w-lg w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="py-5">
            <div class="flex justify-end">
                <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none">
                    Cancel
                </button>
                <button wire:click="save" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
