@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="flex min-h-[calc(100vh-78px)] animate-fade-in flex-col items-center justify-center px-4 py-10 text-center">
        <div class="relative mb-6 flex h-[180px] w-[200px] items-center justify-center">
            <div class="flex h-[160px] w-[160px] items-center justify-center rounded-full bg-[#0502731A]">
                <span class="text-[42px] font-extrabold tracking-wide text-[#050273]">404</span>
            </div>
            <div
                class="animate-scale-in absolute top-2.5 right-2.5 flex h-14 w-14 items-center justify-center rounded-full bg-[#f59e0b] shadow-[0_4px_16px_rgba(245,158,11,0.4)]">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7" stroke="#fff" stroke-width="2.2" />
                    <path d="M21 21l-4.3-4.3" stroke="#fff" stroke-width="2.2" stroke-linecap="round" />
                    <path d="M9 9l4 4M13 9l-4 4" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                </svg>
            </div>
        </div>
        <div class="mb-2.5 text-[22px] font-extrabold text-[#1A1A1A]"
            style="font-weight: 600; font-size: 18px; leading-trim: NONE; line-height: 16px; letter-spacing: 0%;">
            Page Not Found</div>
        <div class="mb-7 max-w-[320px] text-sm leading-[1.6] text-[#4F4F4F]"
            style="font-family: Inter; font-weight: 400; font-size: 14px; leading-trim: NONE; line-height: 24px; letter-spacing: 0%; text-align: center;">
            The page you're looking for doesn't exist or may have
            been moved.</div>
        <a href="{{ route('home') }}"
            class="flex items-center gap-2 rounded-lg bg-[#050273] px-7 py-3 text-sm font-semibold text-white transition-colors hover:bg-[#03015a]">
            Go Back to Property Search
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                <path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
    </div>
@endsection
