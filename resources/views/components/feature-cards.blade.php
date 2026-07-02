@props(['compact' => false])

@php
    $cards = [
        [
            'bg' => '#e8edf8',
            'color' => '#1a237e',
            'title' => 'Secure & Trusted',
            'body' => 'Your data is safe with 256-bit encryption.',
            'icon' =>
                '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="{color}" stroke-width="2" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="{color}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
        ],
        [
            'bg' => '#e6f4ea',
            'color' => '#2e7d32',
            'title' => 'No Extra Charges',
            'body' => 'No transactions charges on debit cards &amp; UPI',
            'icon' =>
                '<circle cx="12" cy="12" r="10" stroke="{color}" stroke-width="2"/><path d="M9 12l2 2 4-4" stroke="{color}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
        ],
        [
            'bg' => '#fffbea',
            'color' => '#b45309',
            'title' => 'Quick & Easy',
            'body' => 'Search, view and pay your property tax in minutes',
            'icon' =>
                '<circle cx="12" cy="12" r="10" stroke="{color}" stroke-width="2"/><path d="M12 6v6l4 2" stroke="{color}" stroke-width="2" stroke-linecap="round"/>',
        ],
        [
            'bg' => '#f3e8ff',
            'color' => '#7c3aed',
            'title' => 'Instant Receipt',
            'body' => 'Get instant payment confirmation &amp; receipt',
            'icon' =>
                '<rect x="5" y="4" width="14" height="17" rx="2" stroke="{color}" stroke-width="2"/><path d="M9 9h6M9 13h4" stroke="{color}" stroke-width="2" stroke-linecap="round"/>',
        ],
    ];
@endphp

<div
    {{ $attributes->merge(['class' => 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 ' . ($compact ? 'gap-3.5' : 'gap-4')]) }}>
    @foreach ($cards as $card)
        <div class="{{ $compact ? 'gap-2.5 p-3.5' : 'gap-3 p-4' }} flex items-start rounded-[10px]"
            style="background:{{ $card['bg'] }}">
            <svg class="{{ $compact ? 'h-5 w-5' : 'h-[22px] w-[22px] mt-0.5' }} shrink-0" fill="none"
                viewBox="0 0 24 24">
                {!! str_replace('{color}', $card['color'], $card['icon']) !!}
            </svg>
            <div>
                <div class="{{ $compact ? 'text-xs' : 'text-[13px]' }} font-bold" style="color:{{ $card['color'] }}">
                    {{ $card['title'] }}</div>
                <div
                    class="{{ $compact ? 'mt-0.5 text-[10px] leading-[1.4]' : 'mt-[3px] text-[11px] leading-[1.5]' }} text-[#4b5563]">
                    {!! $card['body'] !!}</div>
            </div>
        </div>
    @endforeach
</div>
