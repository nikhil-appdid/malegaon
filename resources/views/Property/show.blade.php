@extends('layouts.app')

@section('title', 'Property Details')

@section('content')
    <div class="mx-auto my-8 max-w-[900px] animate-fade-in px-4">
        <x-nil-banner compact class="mb-5" />

        {{-- Compact search card --}}
        <div
            class="mb-5 rounded-xl border border-[#e5e7eb] bg-white px-5 py-4 shadow-[0px_4px_16px_0px_#0000001F]">
            <div class="mb-3.5 flex items-center justify-between"
                style="border: 1px solid #F2F2F2;border-radius: 16px;padding: 9px;">
                <div class="flex items-center gap-3">
                    <div class="flex h-[38px] w-[38px] items-center justify-center rounded-full bg-[#050273]/10">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                            <path d="M3 12L12 3l9 9" stroke="#050273" stroke-width="2" stroke-linecap="round" />
                            <path d="M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9" stroke="#050273" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-[15px] font-bold text-[#1f2937]">Search Property</div>
                        <div class="text-xs text-[#6b7280]">Enter Property Number to view your details and pay property tax.
                        </div>
                    </div>
                </div>
                {{-- <x-skyline class="hidden opacity-30 sm:block" :width="120" :height="44" stroke="#1a237e"
                    strokeWidth="1.5" simple /> --}}
                <img src="{{ asset('images/property-blue.svg') }}" alt="Property Icon">
            </div>
            <form action="{{ route('property.search') }}" method="GET">
                <div class="mb-1.5">
                    <span class="text-[13px] font-semibold text-[#1f2937]">Property Number</span>
                    <span class="ml-0.5 text-[#e53935]">*</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <div
                        class="flex flex-1 items-center overflow-hidden rounded-lg border border-[#d1d5db] bg-white focus-within:border-[#050273] focus-within:ring-2 focus-within:ring-[#0502731A]">
                        <div class="flex h-11 items-center border-r border-[#e5e7eb] px-3">
                            <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24">
                                <path d="M3 12L12 3l9 9" stroke="#6b7280" stroke-width="2" stroke-linecap="round" />
                                <path d="M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9" stroke="#6b7280" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <input name="property_number" type="text" maxlength="14"
                            value="{{ $property['property_number'] }}"
                            class="h-11 flex-1 border-none px-3.5 font-sans text-sm text-[#1f2937] outline-none" />
                    </div>
                    <button type="submit"
                        class="flex h-11 items-center gap-1.5 rounded-lg bg-[#050273] px-5 text-sm font-semibold text-white transition-colors hover:bg-[#03015a]">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" stroke="#fff" stroke-width="2" />
                            <path d="M21 21l-4.35-4.35" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Search
                    </button>
                </div>
            </form>
        </div>

        {{-- Property details card --}}
        <div
            class="mb-6 overflow-hidden rounded-2xl border border-[#eef0f5] bg-white shadow-[0px_4px_16px_0px_#0000001F]">
            <div class="px-4 pt-4">
                <div class="mb-1 flex items-center gap-2.5 rounded-lg bg-[#0502731A] px-5 py-3.5">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                        <rect x="5" y="4" width="14" height="17" rx="2" stroke="#050273" stroke-width="2" />
                        <path d="M9 9h6M9 13h4" stroke="#050273" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <span class="text-[15px] font-bold text-[#050273]">Property Details</span>
                </div>
            </div>
            <div class="grid grid-cols-1 px-4 sm:grid-cols-2">
                {{-- Left column --}}
                <div class="border-[#e5e7eb] sm:border-r">
                    <x-detail-row label="Property Number" :value="$property['property_number']">
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <path d="M3 12L12 3l9 9" stroke="#6b7280" stroke-width="1.8" stroke-linecap="round" />
                            <path d="M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9" stroke="#6b7280" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </x-detail-row>
                    <x-detail-row label="Owner Name" :value="$property['owner_name']">
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" stroke="#6b7280" stroke-width="1.8" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" stroke="#6b7280" stroke-width="1.8"
                                stroke-linecap="round" />
                        </svg>
                    </x-detail-row>
                    <x-detail-row label="Prabhag Samiti" :value="$property['prabhag_samiti']">
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#6b7280"
                                stroke-width="1.8" />
                            <path d="M9 9h6M9 13h4" stroke="#6b7280" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                    </x-detail-row>
                    <x-detail-row label="Zone" :value="$property['zone']" last>
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke="#6b7280" stroke-width="1.8" />
                            <path d="M12 7v5l3 3" stroke="#6b7280" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                    </x-detail-row>
                </div>
                {{-- Right column --}}
                <div>
                    <x-detail-row label="Subcode" :value="$property['subcode']">
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#6b7280"
                                stroke-width="1.8" />
                            <path d="M3 9h18M9 9v12" stroke="#6b7280" stroke-width="1.8" />
                        </svg>
                    </x-detail-row>
                    <x-detail-row label="Block" :value="$property['block']">
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#6b7280"
                                stroke-width="1.8" />
                            <path d="M7 8h10M7 12h6" stroke="#6b7280" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                    </x-detail-row>
                    <x-detail-row label="Address" :value="$property['address']" last>
                        <svg class="h-full w-full" fill="none" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"
                                stroke="#6b7280" stroke-width="1.8" />
                            <circle cx="12" cy="9" r="2.5" stroke="#6b7280" stroke-width="1.8" />
                        </svg>
                    </x-detail-row>
                </div>
            </div>
            {{-- Action buttons --}}
            <div class="mt-2 flex flex-wrap gap-3 border-t border-[#eef0f5] p-5">
                <a href="{{ route('payment.show', $property['property_number']) }}"
                    class="flex items-center gap-2 rounded-lg bg-[#050273] px-7 py-3 text-sm font-semibold text-white transition-colors hover:bg-[#03015a]">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                        <rect x="2" y="6" width="20" height="14" rx="2" stroke="#fff"
                            stroke-width="2" />
                        <path d="M2 10h20" stroke="#fff" stroke-width="2" />
                    </svg>
                    Pay Now
                </a>
                <button type="button" disabled title="Coming soon"
                    class="flex cursor-not-allowed items-center gap-2 rounded-lg border border-[#050273]/40 px-6 py-3 text-sm font-semibold text-[#050273]/40">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                        <path d="M12 3v12M8 11l4 4 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M4 20h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    Download Bill
                </button>
                <button type="button" disabled title="Coming soon"
                    class="flex cursor-not-allowed items-center gap-2 rounded-lg border border-[#050273]/40 px-6 py-3 text-sm font-semibold text-[#050273]/40">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                        <path d="M12 3v12M8 11l4 4 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M4 20h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    Download Receipt
                </button>
            </div>
        </div>

        <x-feature-cards compact />
    </div>
@endsection
