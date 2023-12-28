@props(['columns'])

@if (!isset($columns))
    @php
        $columns = [];
    @endphp
@endif

<thead>
    <tr>
        @foreach ($columns as $column)
            <th
                class="py-3 px-5 text-xs font-semibold tracking-wider text-left text-gray-100 uppercase bg-gray-900 border-b-2 border-gray-200">
                {{ $column }}
            </th>
        @endforeach
    </tr>
</thead>
