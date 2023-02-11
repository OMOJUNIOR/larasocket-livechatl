<div class="flex flex-col pr-6 w-64 flex-shrink-0">

    {{-- logo --}}
    <div class="flex flex-row items-center justify-center h-12 w-full">
        <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                </path>
            </svg>
        </div>
        <div class="ml-2 font-bold text-2xl">QuickChat</div>
    </div>

    {{-- my details --}}
    <div class="flex flex-col items-center bg-indigo-100 dark:bg-gray-700 border border-gray-200 dark:border-gray-500 mt-4 w-full py-6 px-4 rounded-lg">
        <div class="flex items-center justify-center h-20 w-20 bg-indigo-200 dark:text-gray-800 rounded-full text-5xl">
            {{ substr($user['name'], 0, 1) }}
        </div>
        <div class="text-sm font-semibold mt-2">{{ $user['name'] }}</div>
        <div class="text-xs dark:text-gray-300">{{ $user['title'] }}</div>
        <div class="flex flex-row items-center mt-3">

            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div
                    class="w-11 h-6 bg-gray-400 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                </div>
                <span class="ml-3 text-base font-medium text-gray-900 dark:text-gray-300">Active</span>
            </label>

        </div>
    </div>

    {{-- create chat button --}}
    <div class="mt-4 w-full">
        <button class="flex gap-1 items-center m-1 justify-center bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 rounded-xl text-white px-4 py-1">
            <i class="fa-solid fa-plus"></i> New Chat
        </button>
    </div>

    {{-- Contacts --}}
    <div class="flex flex-col mt-4">
        <div class="flex flex-row items-center justify-between text-xs">
            <span class="font-bold">Active Conversations</span>
            <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full  dark:text-gray-800">{{ count($contacts) }}</span>
        </div>
        <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
            @forelse ($contacts as $contact)
                <button class="flex flex-row items-center hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl p-2">
                    <div class="flex items-center justify-center h-8 w-8 bg-indigo-300 rounded-full dark:text-gray-800">
                        {{ substr($contact, 0, 1) }}
                    </div>
                    <div class="ml-2 text-sm font-semibold">{{ $contact }}</div>
                </button>
            @empty
            @endforelse
        </div>

        {{-- Archived Contacts --}}
        <div class="flex flex-row items-center justify-between text-xs mt-6">
            <span class="font-bold">Archivied</span>
            <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full  dark:text-gray-800">1</span>
        </div>
        <div class="flex flex-col space-y-1 mt-4 -mx-2">
            <button class="flex flex-row items-center hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl p-2">
                <div class="flex items-center justify-center h-8 w-8 bg-red-200 rounded-full  dark:text-gray-800">
                    P
                </div>
                <div class="ml-2 text-sm font-semibold">Peter Parker</div>
            </button>
        </div>
    </div>
</div>
