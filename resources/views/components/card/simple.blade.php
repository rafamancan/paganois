@props(['title', 'icon', 'value', 'toggle'])

<div class="flex flex-col flex-auto p-3 bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">

    @if (isset($toggle))
        <div class="flex justify-end hover:cursor-pointer">
            <i
                class="block text-sm text-gray-500 ti {{ $toggle === 'hide' ? 'ti-eye-closed' : 'ti-eye' }} toggleView"></i>
        </div>
    @endif

    <div class="flex flex-row p-6 text-sm text-gray-900 dark:text-gray-100">
        {{ $title }}
    </div>

    <div class="flex flex-row gap-3 justify-center items-center p-6">
        @if ($icon ?? false)
            <i class="ti ti-{{ $icon }} text-gray-500 block text-lg"></i>
        @endif

        @if (isset($toggle))
            <span class="text-gray-300 cardContentValue {{ $toggle === 'hide' ? 'hidden' : 'block' }}">
                {{ $value }}
            </span>
            <div
                class="col-span-2 h-5 w-20 rounded cardContentHide bg-slate-700 {{ $toggle === 'hide' ? 'block' : 'hidden' }}">
            </div>
        @else
            <span class="text-gray-300">{{ $value }}</span>
        @endif
    </div>
</div>
