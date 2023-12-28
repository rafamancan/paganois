@php
    preg_match_all('/\[([^\]]*)\]/', $value, $matches);
    $url = $matches[1][2];
    $icon = $matches[1][1];
@endphp
<a href="{{ $url }}"
    class="inline-flex items-center py-2 px-4 font-semibold tracking-widest text-gray-400 uppercase bg-gray-800 rounded-md border border-gray-800 shadow-sm transition duration-150 ease-in-out hover:bg-gray-900 focus:ring-offset-gray-800 focus:outline-none disabled:opacity-25">
    <i class="ti ti-{{ $icon }}"></i>
</a>
