@props(['values'])
<tr class="bg-gray-900 border-b border-gray-600 hover:bg-gray-700 hover:border-gray-800">
    @foreach ($values as $value)
        <td class="py-5 px-5">
            @if (Str::startsWith($value, '[pill]'))
                <x-table.components.pill :value="$value" />
            @elseif (Str::startsWith($value, '[button]'))
                <x-table.components.button :value="$value" />
            @else
                <p class="text-gray-100 whitespace-no-wrap">
                    {{ $value }}
                </p>
            @endif
        </td>
    @endforeach
</tr>
