<div class="flex-shrink-0 flex items-center">
    <a href="{{ route('dashboard') }}">
        <span class="h-8 w-auto">DIG</span>
    </a>
</div>
<nav aria-label="Global" class="hidden lg:ml-6 lg:flex lg:items-center lg:space-x-4">
    <a href="{{ route('properties.index') }}" class="px-3 py-2 text-gray-900 text-sm font-medium">
        Properties
    </a>
    <a href="{{ route('tenants.index') }}" class="px-3 py-2 text-gray-900 text-sm font-medium">
        Tenants
    </a>
    <a href="{{ route('work-orders.index') }}" class="px-3 py-2 text-gray-900 text-sm font-medium">
        Work Orders
    </a>
    <a href="{{ route('tenants.communication') }}" class="px-3 py-2 text-gray-900 text-sm font-medium">
        Communication
    </a>
    <a href="{{ route('money.payments.index') }}" class="px-3 py-2 text-gray-900 text-sm font-medium">
        Money
    </a>
</nav>
