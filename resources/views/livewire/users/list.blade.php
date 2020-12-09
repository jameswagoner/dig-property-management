<div class="space-y-4">
    <div>
        {{ $users->links() }}
    </div>

    <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($users as $user)
        <li class="col-span-1 flex shadow-sm rounded-md">
            <div class="flex-shrink-0 flex items-center justify-center w-16 bg-{{ Arr::random(['pink', 'green', 'blue', 'indego', 'orange']) }}-600 text-white text-sm leading-5 font-medium rounded-l-md">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
            </div>
            <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                <div class="flex-1 px-4 py-2 text-sm leading-5 truncate">
                    <a href="#" class="text-gray-900 font-medium hover:text-gray-600 transition ease-in-out duration-150">
                        {{ $user->name }}
                    </a>
                    <p class="text-gray-500">Role / Permission Group</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

    <div>
        {{ $users->links() }}
    </div>
</div>