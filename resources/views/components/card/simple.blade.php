@props(['title', 'icon', 'value'])

<div class="flex flex-col flex-auto p-3 bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
    <div class="p-6 text-sm text-center text-gray-900 dark:text-gray-100">
        {{ $title }}
    </div>

    <div class="flex flex-row gap-3 justify-center items-center p-6">
        @if ($icon ?? false)
            <i class="ti ti-{{ $icon }} text-gray-500 block text-lg"></i>
        @endif

        <span class="text-gray-300">
            {{ $value }}
        </span>
    </div>
</div>
