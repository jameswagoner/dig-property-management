<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        Profile Information
    </x-slot>

    <x-slot name="description">
        Enter staff member's profile information and email address.
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="name" value="Name" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="email" value="Email Address" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model="email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="Password" />
            <div class="mt-1 w-full flex">
                <x-jet-input wire:model="password" id="password" type="password" class="flex-1 form-input block w-full min-w-0 rounded-none rounded-r-md"  autocomplete="new-password" />
                <span wire:click="generatePassword" class="inline-flex items-center -ml-2 px-3 rounded-r-md border rounded-l-none border-gray-300 bg-gray-50 text-gray-500 hover:cursor-pointer">
                    Generate
                </span>
            </div>
            <x-jet-input-error for="password" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button wire:click="save" wire:loading.attr="disabled">
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

<x-jet-section-border />

<x-jet-form-section submit="">
    <x-slot name="title">
        Groups and Permissions
    </x-slot>

    <x-slot name="description">
        Specify staff member's access to the system.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="group" value="Group" />
            <select wire:model="group" id="group" class="mt-1 block form-select w-full">
                <option value="" disabled selected>Select an group</option>
                <option value="admin">Administrator</option>
                <option value="maintenance">Maintenance</option>
                <option value="accounting">Accounting</option>
            </select>
            <x-jet-input-error for="group" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button wire:click="save" wire:loading.attr="disabled">
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
