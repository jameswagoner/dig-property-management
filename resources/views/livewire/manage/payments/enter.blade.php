<div>
    <x-slot name="pageHeader">
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center">
                            <h1 class="md:ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                Add New Rent Payment
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto bg-white shadow overflow-hidden p-6 sm:rounded-lg">
                    <div class="sm:divide-y divide-gray-200">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start py-5">
                            <label for="unit-id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Unit
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select wire:model="unit_id" id="unit-id" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    <option value="">Select a Unit</option>
                                    @foreach($this->units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('unit_id') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-5">
                            <label class="text-base font-medium text-gray-700">Category</label>
                            <fieldset class="mt-4">
                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="rent" wire:model="category" type="radio" value="Rent Payment" class="focus:ring-steel-600 h-4 w-4 text-steel-800 border-gray-300">
                                        <label for="rent" class="ml-3 block text-sm font-medium text-gray-700"> Rent - Tenant </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="rent" wire:model="category" type="radio" value="NECAC Payment" class="focus:ring-steel-600 h-4 w-4 text-steel-800 border-gray-300">
                                        <label for="rent" class="ml-3 block text-sm font-medium text-gray-700"> Rent - NECAC </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="utility" wire:model="category" type="radio" value="Utility Payment" class="focus:ring-steel-600 h-4 w-4 text-steel-800 border-gray-300">
                                        <label for="utility" class="ml-3 block text-sm font-medium text-gray-700"> Utilities </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="pet" wire:model="category" type="radio" value="Storage Payment" class="focus:ring-steel-600 h-4 w-4 text-steel-800 border-gray-300">
                                        <label for="pet" class="ml-3 block text-sm font-medium text-gray-700"> Storage </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="pet" wire:model="category" type="radio" value="Pet Payment" class="focus:ring-steel-600 h-4 w-4 text-steel-800 border-gray-300">
                                        <label for="pet" class="ml-3 block text-sm font-medium text-gray-700"> Pet </label>
                                    </div>
                                </div>
                            </fieldset>
                            @error('category') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start py-5">
                            <label for="amount" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Amount
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" wire:model="amount" id="amount" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('amount') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start py-5">
                            <label for="transacted-at" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Payment Date
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="date" wire:model="transacted_at" id="transacted-at" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('transacted_at') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start py-5">
                            <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Notes
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <textarea wire:model="description" id="description" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                            @error('description') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-8 flex">
                        <button type="button" wire:click="save()" class="rounded-md shadow-sm px-4 py-2 bg-blue-500 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none">
                            Save
                        </button>
                        <button type="button" wire:click="saveAndNew()" class="ml-4 rounded-md shadow-sm px-4 py-2 bg-green-500 text-sm font-medium text-white hover:bg-green-600 focus:outline-none">
                            Save &amp; Add Another
                        </button>
                        <button type="button" wire:click="cancel()" class="ml-auto rounded-md border border-gray-300 text-gray-400 px-4 py-2 text-sm font-medium focus:outline-none">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
