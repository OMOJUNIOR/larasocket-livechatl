@props(['pov', 'from', 'message', 'color'])

@if ($pov != $from)
    <div class="col-start-1 col-end-8 p-3 rounded-lg">
        <div class="flex flex-row items-center">
            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-300 dark:text-gray-800 flex-shrink-0 ">
                {{ substr($from, 0, 1) }}
            </div>
            <div class="relative ml-3 text-sm bg-white dark:bg-gray-800 py-2 px-4 shadow rounded-xl">
                <div>{{ $message }}</div>
            </div>
        </div>
    </div>
@else
    <div class="col-start-6 col-end-13 p-3 rounded-lg">
        <div class="flex items-center justify-start flex-row-reverse">
            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-200 dark:text-gray-800 flex-shrink-0">
                {{ substr($from, 0, 1) }}
            </div>
            <div class="relative mr-3 text-sm bg-indigo-50 dark:bg-indigo-500/30 py-2 px-4 shadow rounded-xl">
                <div>{{ $message }}</div>
            </div>
        </div>
    </div>
@endif
