<div>
    <x-slot name="pageHeader">
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-2 sm:py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center">
                            <h1 class="sm:ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                {{ $user->name }}
                            </h1>
                        </div>
                        <dl class="flex flex-col sm:ml-3 mt-1 sm:flex-row sm:flex-wrap">
                            <dt class="sr-only">Communication</dt>
                            <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" x-description="Heroicon name: outline/chat-alt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                </svg>
                                Conversation
                            </dd>
                        </dl>
                    </div>
                    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4 hidden sm:block">
                        <button type="button" class="rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none">
                            Call
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="mt-8">
        <div class="hidden sm:block">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col mt-2">
                    <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                        <div class="divide-y divide-gray-200">
                            <div class="px-4 py-6 sm:px-6">
                                <ul role="list" class="space-y-8">
                                    @forelse($this->messages as $message)
                                    <li>
                                        <div class="{{ Arr::toCssClasses([
                                            'flex',
                                            'flex-row-reverse text-right' => $message->direction === $message::OUTBOUND,
                                            'flex-row text-left' => $message->direction === $message::INBOUND
                                        ]) }}">
                                            <div class="flex-shrink-0">
                                                @if($message->direction === $message::INBOUND)
                                                <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ $user->name }}&color=7F9CF5&background=EBF4FF" alt="">
                                                @endif

                                                @if($message->direction === $message::OUTBOUND)
                                                    <img class="h-10 w-10 rounded-full" src="{{ asset('images/logo.svg') }}" alt="">
                                                @endif
                                            </div>
                                            <div class="mx-3">
                                                <div class="p-3 bg-blue-100 text-sm text-gray-700 rounded-lg">
                                                    <p>{{ $message->body }}</p>
                                                </div>
                                                <div class="mt-1 text-xs">
                                                    <span class="text-gray-500 font-light">{{ $message->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-6 sm:px-6">
                            <div class="flex items-center justify-between space-x-3">
                                <div class="form-group flex-1">
                                    <label for="message-input" class="sr-only">Message</label>
                                    <input wire:model.defer="message" id="message-input" class="form-control" type="text" placeholder="Enter message" style="margin-top: 0" />
                                </div>
                                <button wire:click="send()" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:hidden">
            <div class="divide-y divide-gray-200">
                <div class="px-4">
                    <ul role="list" class="space-y-4">
                        @forelse($this->messages as $message)
                            <li class="{{ Arr::toCssClasses([
                                'flex',
                                'flex-row-reverse text-right' => $message->direction === $message::OUTBOUND,
                                'flex-row text-left' => $message->direction === $message::INBOUND
                            ]) }}">
                                <div>
                                    <div class="{{ Arr::toCssClasses([
                                        'p-3 text-sm text-gray-700 rounded-lg',
                                        'bg-gray-200' => $message->direction === $message::OUTBOUND,
                                        'bg-blue-100' => $message->direction === $message::INBOUND
                                    ]) }}">
                                        <p>{{ $message->body }}</p>
                                    </div>
                                    <div class="mt-1 text-xs">
                                        <span class="text-gray-500 font-light">{{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="bg-gray-50 border-t border-gray-200 mt-4 p-4">
                <div class="flex items-center justify-between space-x-3">
                    <div class="form-group flex-1">
                        <label for="message-input" class="sr-only">Message</label>
                        <input wire:model.defer="message" id="message-input" class="form-control" type="text" placeholder="Enter message" style="margin-top: 0" />
                    </div>
                    <button wire:click="send()" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
