<x-app-layout title="{{ $unit->name }}">
    <x-slot name="pageHeader">
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center">
                            <div>
                                <div class="flex items-center">
                                    <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                        {{ $unit->name }}
                                    </h1>
                                </div>
                                <dl class="mt-6 flex flex-col sm:mt-1 sm:flex-row sm:flex-wrap">
                                    <dt class="sr-only">Address</dt>
                                    <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             x-description="Heroicon name: solid/office-building"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $unit->address }}
                                    </dd>
                                    <dt class="sr-only">Status</dt>
                                    <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                        @if ($unit->user)
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" x-description="Heroicon name: solid/check-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            Rented
                                        @else
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-red-400" x-description="Heroicon name: solid/exclamation-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            Vacant
                                        @endif
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                        <x-page.profile.actions-dropdown>
                            <div class="py-1" role="none">
                                <a href="{{ route('manage.units.edit', $unit) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Edit</a>
                            </div>
                        </x-page.profile.actions-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="mt-8">
        <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
            Rent Payments
        </h2>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($payments as $payment)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $payment->transacted_at->toFormattedDateString() }}
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-900 font-medium">
                                    ${{ $payment->formatted_amount }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500" colspan="5">
                                    No payments have been recorded
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
            Expenses
        </h2>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Business
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($expenses as $expense)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $expense->transacted_at->toFormattedDateString() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $expense->category }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $expense->business_name }}
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-900 font-medium">
                                    ${{ $expense->formatted_amount }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500" colspan="5">
                                    No expenses have been recorded
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
            Labor
        </h2>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Contractor
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($laborExpenses as $labor)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $labor->transacted_at->toFormattedDateString() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $labor->user->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $labor->description }}
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-900 font-medium">
                                    ${{ $labor->formatted_amount }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500" colspan="5">
                                    No labor expenses have been recorded
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
