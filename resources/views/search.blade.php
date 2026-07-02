@extends('layouts.app')

@section('title', 'Search Property')

@section('content')
    <div class="mx-auto my-8 max-w-[900px] animate-fade-in px-4">
        <x-nil-banner class="mb-6" />

        {{-- Main card --}}
        <div
            class="overflow-hidden rounded-[14px] border border-[#e5e7eb] bg-white pb-8 shadow-[0px_4px_16px_0px_#0000001F]">
            {{-- Hero banner --}}
            <div class="flex items-center justify-between bg-[#050273] px-7 py-[22px]">
                <div class="flex items-center gap-4">
                    <div
                        class="flex h-13 w-13 items-center justify-center rounded-full border-2 border-white/30 bg-white/15">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24">
                            <path d="M3 12L12 3l9 9" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                            <path d="M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9" stroke="#fff" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-white">Search Property</div>
                        <div class="mt-0.5 text-[13px] text-white/75">Enter Property Number to view your details and pay
                            property tax.</div>
                    </div>
                </div>
                {{-- <x-skyline class="hidden sm:block" :width="160" :height="60" stroke="#fff" strokeWidth="1.2"
                    style="opacity:.35" /> --}}
                <img src="{{ asset('images/property.svg') }}" alt="">
            </div>

            {{-- Search form --}}
            <div class="px-10 pt-8">
                <form action="{{ route('property.search') }}" method="GET">
                    <div class="mb-2">
                        <label for="property_number" class="text-sm font-semibold text-[#1f2937]">Property Number</label>
                        <span class="ml-0.5 text-[#e53935]">*</span>
                    </div>
                    <div
                        class="flex items-center overflow-hidden rounded-lg border border-[#d1d5db] bg-white focus-within:border-[#050273] focus-within:ring-2 focus-within:ring-[#0502731A]">
                        <div class="flex h-12 items-center border-r border-[#e5e7eb] px-3.5">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                                <path d="M3 12L12 3l9 9" stroke="#6b7280" stroke-width="2" stroke-linecap="round" />
                                <path d="M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9" stroke="#6b7280" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <input id="property_number" name="property_number" type="text"
                            placeholder="Enter Property Number" maxlength="14"
                            class="h-12 flex-1 border-none px-4 font-sans text-[15px] text-[#1f2937] outline-none" />
                    </div>
                    <div class="mt-2 text-xs text-[#6b7280]">Enter 14-digit Property Number as printed on your tax bill.
                    </div>

                    <div class="mt-7 flex justify-center">
                        <button type="submit"
                            class="flex items-center gap-2 rounded-lg bg-[#050273] px-10 py-3.5 text-[15px] font-semibold text-white transition-colors hover:bg-[#03015a]">
                            <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="8" stroke="#fff" stroke-width="2" />
                                <path d="M21 21l-4.35-4.35" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                            </svg>

                            Search Property
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <x-feature-cards class="mt-6" />
    </div>
@endsection
