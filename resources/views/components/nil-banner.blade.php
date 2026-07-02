@props(['compact' => false])

<div
    {{ $attributes->merge(['class' => 'flex items-center gap-2.5 rounded-[10px] border-[1.5px] border-[#c5cae9] bg-[#e8eaf6] ' . ($compact ? 'px-5 py-3' : 'px-5 py-3.5')]) }}>
    <svg class="{{ $compact ? 'h-[18px] w-[18px]' : 'h-5 w-5' }} shrink-0" fill="none" viewBox="0 0 24 24">
        <path d="M7 7h10M7 12h6M7 17h8" stroke="#1a237e" stroke-width="2" stroke-linecap="round" />
        <rect x="3" y="3" width="18" height="18" rx="3" stroke="#1a237e" stroke-width="2" />
    </svg>
    <span class="{{ $compact ? 'text-[13px]' : 'text-sm' }} font-semibold text-[#1a237e]">Transactions Charges: NIL for
        all Debit Cards &amp; UPI</span>
</div>
