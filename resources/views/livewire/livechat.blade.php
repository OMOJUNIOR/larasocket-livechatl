<div wire:ignore.self class="flex max-h-screen h-[90vh] antialiased text-gray-800 bg-white dark:bg-gray-800 dark:text-gray-300 rounded-lg shadow-sm">
    <div class="flex flex-row h-full w-full overflow-x-hidden p-6">
        {{-- Left Menu Section --}}
        @include('livewire.chat.leftMenu')

        {{-- Chat Section --}}
        @include('livewire.chat.chatSection')
    </div>
</div>
