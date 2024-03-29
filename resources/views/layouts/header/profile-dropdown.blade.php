<div x-data="dropdown" @click.away="onClickAway($event)" class="ml-3 relative">
    <div>
        <button
            x-ref="button"
            x-on:click="onButtonClick()"
            type="button"
            class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none lg:p-2 lg:rounded-md lg:hover:bg-gray-50">
            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&color=7F9CF5&background=EBF4FF" alt="{{ auth()->user()->name }}">
            <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block">
                <span class="sr-only">Open user menu for </span>{{ auth()->user()->name }}</span>
            <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" style="display: none;">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Your Profile
        </a>
        <form id="logout" class="mb-0" method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                Logout
            </a>
        </form>
    </div>

</div>
