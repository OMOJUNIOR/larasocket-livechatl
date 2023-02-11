<div class="flex flex-col flex-auto overflow-y-hidden relative">
    <div class="p-2 mb-2 flex justify-between items-center">
        {{-- Contact info --}}
        <div class=" flex gap-4 items-center">
            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-300  dark:text-gray-800 flex-shrink-0">
                K
            </div>
            <div class="text-xl">
                Kerem Çıkar
            </div>
        </div>

        <div>
            {{-- settings button --}}
            <button id="settingButton" data-dropdown-toggle="dropdown" data-dropdown-placement="left-start"
                class="flex items-center justify-center w-9 h-9 text-dark dark:text-gray-300 text-xl hover:bg-gray-200  dark:hover:bg-gray-700 px-4 py-2.5 rounded-full" type="button"><i
                    class="fa-solid fa-ellipsis-vertical"></i></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="settingButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Details</a>
                    </li>
                    <li>
                        <a href="#" class="text-red-600 block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 dark:bg-gray-900 p-4 max-h-[91%] relative">
        <div class="flex flex-col overflow-y-auto mb-4">
            <div class="flex flex-col">
                <div class="grid grid-cols-12 gap-y-2 ">

                    {{-- chat bubbles --}}
                    @forelse ($chatExample as $messages)
                        <x-chat-bubble :pov="$messages[0]" :from="$messages[1]" :message="$messages[2]" />
                    @empty
                    @endforelse

                </div>
            </div>
        </div>

        {{-- form starts here --}}
        <form action="">
            <div class="flex flex-row items-stretch rounded-xl bg-white dark:bg-gray-800 w-full p-4 gap-2">
                {{-- adding files --}}
                <div class="flex items-center">
                    <label for="_file" class="m-1"><i
                            class="fa-solid fa-paperclip text-2xl border-2 hover:border-sky-800 bg-sky-50 dark:text-white dark:bg-sky-600 cursor-pointer rounded-full px-2 py-1"></i>
                        <input type="file" name="" id="_file" class="appearance-none hidden" placeholder="Dosya seçin">
                    </label>
                </div>

                {{-- input text --}}
                <div class="flex items-center w-full">
                    <div class="relative w-full">
                        <textarea class="flex w-full dark:bg-gray-700 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-indigo-300 pl-4" rows="1"></textarea>
                    </div>
                </div>

                {{-- send button --}}
                <div class="flex items-stretch">
                    <button class="flex gap-1 items-center m-1 justify-center bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 rounded-xl text-white px-4 py-1">
                        <span>Send</span>
                        <span>
                            <svg class="w-4 h-4 transform rotate-90 -mt-px" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
        </form>

    </div>
</div>
