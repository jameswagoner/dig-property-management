<div>
    <button wire:click="open" type="button" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
        New Property
    </button>

    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model="showModal">
            <x-slot name="title">Add Property</x-slot>
            <x-slot name="content">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="nickname" class="block text-sm font-medium text-gray-700">
                            Nickname
                        </label>
                        <div class="mt-1">
                            <input wire:model.defer="property.nickname" type="text" id="nickname" autocomplete="given-name" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="rent_amount" class="block text-sm font-medium text-gray-700">
                            How much is rent?
                        </label>
                        <div class="mt-1">
                            <input wire:model.defer="property.rent_amount" type="text" id="rent_amount" autocomplete="family-name" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <hr class="sm:col-span-6 border-gray-300" />

                    <div class="sm:col-span-6">
                        <label for="street_address" class="block text-sm font-medium text-gray-700">
                            Street address
                        </label>
                        <div class="mt-1">
                            <input wire:model.defer="property.street_address" type="text" id="street_address" autocomplete="street-address" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="city" class="block text-sm font-medium text-gray-700">
                            City
                        </label>
                        <div class="mt-1">
                            <input wire:model.defer="property.city" type="text" id="city" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="state" class="block text-sm font-medium text-gray-700">
                            State
                        </label>
                        <div class="mt-1">
                            <input wire:model="property.state" type="text" id="state" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">
                            Postal Code
                        </label>
                        <div class="mt-1">
                            <input wire:model.defer="property.postal_code" type="text" id="postal_code" autocomplete="postal-code" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <button wire:click="$set('showModal', false)" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-orange-600 text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Create
                </button>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
