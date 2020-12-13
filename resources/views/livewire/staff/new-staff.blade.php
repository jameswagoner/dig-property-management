<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        Profile Information
    </x-slot>

    <x-slot name="description">
        Enter staff member's profile information and email address.
    </x-slot>

    <x-slot name="form">

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="Name" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="staff.name" autocomplete="name" />
            <x-jet-input-error for="staff.name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="Email Address" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="staff.email" />
            <x-jet-input-error for="staff.email" class="mt-2" />
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
