@extends('layouts.app')

@section('title', 'Payment Failed')

@section('content')
    <div class="flex min-h-[calc(100vh-78px)] animate-fade-in flex-col items-center justify-center px-4 py-10 text-center">
        <div class="relative mb-6 h-[180px] w-[200px]">
            <svg width="200" height="180" viewBox="0 0 200 180" fill="none">
                <circle cx="100" cy="100" r="65" fill="#fce7f3" opacity="0.6" />
                <rect x="52" y="85" width="96" height="65" rx="8" fill="#e2e8f0" />
                <rect x="52" y="95" width="96" height="14" fill="#cbd5e1" />
                <rect x="60" y="117" width="24" height="8" rx="2" fill="#94a3b8" />
                <rect x="90" y="117" width="16" height="8" rx="2" fill="#94a3b8" />
                <path d="M148 150 Q160 120 140 100 Q130 135 148 150Z" fill="#fca5a5" opacity="0.6" />
                <path d="M52 155 Q38 125 58 105 Q68 138 52 155Z" fill="#fca5a5" opacity="0.5" />
                <circle cx="55" cy="72" r="3" fill="#f9a8d4" opacity="0.7" />
                <circle cx="148" cy="68" r="2" fill="#f9a8d4" opacity="0.7" />
                <circle cx="42" cy="108" r="2" fill="#f9a8d4" opacity="0.5" />
                <circle cx="130" cy="92" r="14" fill="#ef4444" />
                <text x="130" y="97" text-anchor="middle" font-size="14" font-weight="700" fill="#fff"
                    font-family="Inter,sans-serif">!</text>
            </svg>
            <div
                class="animate-scale-in absolute top-2.5 left-1/2 flex h-14 w-14 -translate-x-1/2 items-center justify-center rounded-full bg-[#ef4444] shadow-[0_4px_16px_rgba(239,68,68,0.4)]">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" stroke="#fff" stroke-width="3" stroke-linecap="round" />
                </svg>
            </div>
        </div>
        <div class="mb-2.5 text-[22px] font-extrabold text-[#1f2937]">Payment Failed</div>
        <div class="mb-7 max-w-[300px] text-sm leading-[1.6] text-[#6b7280]">Your payment could not be
            processed.<br />Please try again later.</div>
        <a href="{{ route('home') }}"
            class="flex items-center gap-2 rounded-lg bg-[#1a237e] px-7 py-3 text-sm font-semibold text-white">
            Go Back to Property Search
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                <path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
    </div>
@endsection
