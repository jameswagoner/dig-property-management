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
        <form action="{{ $unit->id ? route('manage.units.update', $unit) : route('manage.units.store') }}" method="post" class="bg-white overflow-hidden shadow rounded-lg">
            {{ csrf_field() }}
            <div class="p-6 space-y-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $unit->name }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{ $unit->address }}">
                </div>
                <div class="form-group">
                    <label for="rental-amount">Rental Amount</label>
                    <input id="rental-amount" class="form-control" type="text" name="rental_amount" value="{{ $unit->rental_amount }}">
                </div>
                <button type="submit" class="rounded-md shadow-sm px-4 py-2 bg-blue-500 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
