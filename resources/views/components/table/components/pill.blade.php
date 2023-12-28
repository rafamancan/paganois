@php
    $colorText = 'text-green-900';
    $colorBackground = 'bg-green-200';
    $value = Str::replaceFirst('[pill][enable]:', '', $value);

    if (Str::contains($value, '[pill][disable]:')) {
        $colorText = 'text-orange-900';
        $colorBackground = 'bg-orange-200';
        $value = Str::replaceFirst('[pill][disable]:', '', $value);
    }
@endphp

<span class="inline-block relative py-1 px-3 font-semibold leading-tight {{ $colorText }}">
    <span aria-hidden class="absolute inset-0 {{ $colorBackground }} rounded-full opacity-80"></span>
    <span class="relative">{{ $value }}</span>
</span>
