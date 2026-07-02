@extends('layouts.app')

@section('title', 'Payment Successful')

@section('content')
    <div class="flex min-h-[calc(100vh-78px)] animate-fade-in flex-col items-center justify-center px-4 py-10 text-center">
        <div class="relative mb-6 h-40 w-[180px]">
            <img src="{{ asset('images/payment-success.svg') }}" alt="Payment Successful" class="h-full w-full object-contain">
            {{-- <svg width="180" height="160" viewBox="0 0 180 160" fill="none" class="absolute top-0 left-0">
                <ellipse cx="90" cy="130" rx="60" ry="20" fill="#dcfce7" opacity="0.6" />
                <path d="M50 140 Q40 100 70 80 Q80 120 50 140Z" fill="#86efac" opacity="0.5" />
                <path d="M130 140 Q140 100 110 80 Q100 120 130 140Z" fill="#86efac" opacity="0.5" />
                <path d="M90 145 Q75 110 90 90 Q105 110 90 145Z" fill="#4ade80" opacity="0.5" />
                <circle cx="90" cy="75" r="28" fill="#dcfce7" />
                <circle cx="90" cy="75" r="22" fill="#bbf7d0" />
                <text x="90" y="81" text-anchor="middle" font-size="20" font-weight="700" fill="#166534"
                    font-family="Inter,sans-serif">₹</text>
            </svg> --}}

        </div>
        <div class="mb-2.5 text-[22px] font-extrabold text-[#1A1A1A]"
            style="font-weight: 600;
    font-style: Semi Bold;
    font-size: 18px;
    leading-trim: NONE;
    line-height: 16px;
    letter-spacing: 0%;">
            Payment Successful!</div>
        <div class="mb-7 max-w-[300px] text-sm leading-[1.6] text-[#4F4F4F]"
            style="font-family: Inter;
font-weight: 400;
font-style: Regular;
font-size: 14px;
leading-trim: NONE;
line-height: 24px;
letter-spacing: 0%;
text-align: center;
">
            This property tax payment has been successfully
            received and recorded.</div>
        <button type="button" disabled title="Coming soon"
            class="cursor-not-allowed rounded-lg bg-[#050273]/40 px-8 py-3 text-sm font-semibold text-white">
            View Receipt
        </button>
    </div>
@endsection
