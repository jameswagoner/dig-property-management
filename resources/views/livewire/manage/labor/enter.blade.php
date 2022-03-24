<div>
    <x-slot name="pageHeader">
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center">
                            <h1 class="md:ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                Add New Labor Expense
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
                                </select>                            </div>
                            @error('unit_id') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
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
                                Date
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" wire:model="transacted_at" id="transacted-at" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('transacted_at') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="button" wire:click="save()" class="rounded-md shadow-sm px-4 py-2 bg-blue-500 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none">
                            Save
                        </button>
                        <button type="button" wire:click="saveAndNew()" class="rounded-md shadow-sm px-4 py-2 bg-green-500 text-sm font-medium text-white hover:bg-green-600 focus:outline-none">
                            Save &amp; Add Another
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
