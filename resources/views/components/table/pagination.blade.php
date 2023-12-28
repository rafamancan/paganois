<div class="flex flex-col items-center py-5 px-5 bg-gray-900 border-t xs:flex-row xs:justify-between">
    <span class="text-gray-100 xs:text-sm">
        Mostrando {{ $showing }} de {{ $total }} resultados
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
        <button
            class="py-2 px-4 text-xs font-semibold tracking-widest text-gray-400 uppercase bg-gray-800 rounded-l border border-gray-800 shadow-sm transition duration-150 ease-in-out hover:bg-gray-900 focus:ring-offset-gray-800 focus:outline-none disabled:opacity-25">
            {{ __('Anterior') }}
        </button>
        <button
            class="py-2 px-4 text-xs font-semibold tracking-widest text-gray-400 uppercase bg-gray-800 rounded-r border border-gray-800 shadow-sm transition duration-150 ease-in-out hover:bg-gray-900 focus:ring-offset-gray-800 focus:outline-none disabled:opacity-25">
            {{ __('Próximo') }}
        </button>
    </div>
</div>
