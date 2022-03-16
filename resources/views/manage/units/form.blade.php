<x-app-layout title="{{ $unit->id ? 'Edit' : 'New' }} {{ $unit->name ?? 'Unit' }}">
    <x-slot name="pageHeader">
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center">
                            <div>
                                <div class="flex items-center">
                                    <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                        {{ $unit->id ? 'Edit' : 'New' }} {{ $unit->name ?? 'Unit' }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="max-w-6xl mx-auto mt-2 px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
                    <div class="form-group sm:col-span-6">
                        <label for="first-name" >
                            Name
                        </label>
                        <input id="first-name" class="form-control" type="text" name="name" value="{{ $unit->name }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
