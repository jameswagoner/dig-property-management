<x-base-layout title="{{ $tenant->id ? 'Edit' : 'New' }} Tenant">
    <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
        {{ $tenant->id ? 'Edit' : 'New' }} Tenant
    </h2>
    <div class="max-w-6xl mx-auto mt-2 px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
                    <div class="form-group sm:col-span-3">
                        <label for="first-name" >
                            First name
                        </label>
                        <input id="first-name" class="form-control" type="text" name="first_name" value="{{ $tenant->first_name }}">
                    </div>
                    <div class="form-group sm:col-span-3">
                        <label for="last-name" >
                            Last name
                        </label>
                        <input id="last-name" class="form-control" type="text" name="last_name" value="{{ $tenant->last_name }}">
                    </div>
                    <div class="form-group sm:col-span-3">
                        <label for="email" >
                            Email address
                        </label>
                        <input id="email" class="form-control" type="text" name="email" value="{{ $tenant->email }}">
                    </div>
                    <div class="form-group sm:col-span-3">
                        <label for="number" >
                            Phone number
                        </label>
                        <input id="number" class="form-control" type="text" name="number" value="{{ $tenant->number }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
