@props(['label', 'value', 'last' => false])

<div
    {{ $attributes->merge(['class' => 'flex items-start gap-2.5 px-5 py-3.5 ' . ($last ? '' : 'border-b border-[#f3f4f6]')]) }}>
    <div class="mt-px h-[18px] w-[18px] shrink-0">{{ $slot }}</div>
    <div>
        <span class="text-xs text-[#6b7280]">{{ $label }}:</span><br>
        <span class="text-sm font-semibold text-[#1f2937]">{{ $value }}</span>
    </div>
</div>
