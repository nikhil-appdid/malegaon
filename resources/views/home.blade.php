@extends('layouts.app')

@section('title', 'Search Property')

@section('content')


    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">

        {{-- Card header --}}
        <div class="relative bg-[#1B2A6B] px-8 py-7 overflow-hidden">
            <svg class="absolute right-0 bottom-0 h-full w-48 opacity-10 pointer-events-none" viewBox="0 0 160 100"
                preserveAspectRatio="xMaxYMax slice" fill="white" xmlns="http://www.w3.org/2000/svg">
                <rect x="8" y="45" width="18" height="55" />
                <rect x="30" y="25" width="18" height="75" />
                <rect x="52" y="55" width="18" height="45" />
                <rect x="74" y="12" width="18" height="88" />
                <rect x="96" y="38" width="18" height="62" />
                <rect x="118" y="58" width="18" height="42" />
                <rect x="140" y="30" width="14" height="70" />
            </svg>
            <div class="relative flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-white/15 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.75"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-white text-xl font-semibold">Search Property</h2>
                    <p class="text-indigo-100/80 text-sm mt-1">Enter Property Number to view your details and pay
                        property tax.</p>
                </div>
            </div>
        </div>

        {{-- Card body --}}
        <div class="p-8 md:p-10">
            <form action="{{ url('/property/search') }}" method="GET">
                <label for="property_number" class="block text-sm font-semibold text-gray-800 mb-2">
                    Property Number<span class="text-red-500 ml-0.5">*</span>
                </label>
                <div
                    class="flex rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-[#1B2A6B]/20 focus-within:border-[#1B2A6B] transition">
                    <span class="flex items-center px-3 bg-gray-50 border-r border-gray-300">
                        <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </span>
                    <input type="text" id="property_number" name="property_number" placeholder="Enter Property Number"
                        maxlength="14" class="flex-1 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 outline-none" />
                </div>
                <p class="mt-2 text-xs text-gray-500">Enter 14-digit Property Number as printed on your tax bill.
                </p>

                <div class="flex justify-center mt-8">
                    <button type="submit"
                        class="inline-flex items-center gap-2 bg-[#1B2A6B] hover:bg-[#152259] text-white font-medium text-sm px-8 py-3 rounded-lg shadow-md transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                        Search Property
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Feature grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-4">
            <div class="w-8 h-8 rounded-md bg-blue-100 text-blue-600 flex items-center justify-center mb-3">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286z" />
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-gray-900 mb-1">Secure &amp; Trusted</h3>
            <p class="text-xs text-gray-600 leading-relaxed">Your data is safe with 256-bit encryption.</p>
        </div>

        <div class="bg-green-50 border border-green-100 rounded-xl p-4">
            <div class="w-8 h-8 rounded-md bg-green-100 text-green-600 flex items-center justify-center mb-3">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-gray-900 mb-1">No Extra Charges</h3>
            <p class="text-xs text-gray-600 leading-relaxed">No transactions charges on debit cards &amp; UPI</p>
        </div>

        <div class="bg-amber-50 border border-amber-100 rounded-xl p-4">
            <div class="w-8 h-8 rounded-md bg-amber-100 text-amber-600 flex items-center justify-center mb-3">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-gray-900 mb-1">Quick &amp; Easy</h3>
            <p class="text-xs text-gray-600 leading-relaxed">Search, view and pay your property tax in minutes</p>
        </div>

        <div class="bg-purple-50 border border-purple-100 rounded-xl p-4">
            <div class="w-8 h-8 rounded-md bg-purple-100 text-purple-600 flex items-center justify-center mb-3">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h4.125m-4.125 3H12M8.25 21h8.25a1.5 1.5 0 001.5-1.5V9.75L13.5 3H8.25a1.5 1.5 0 00-1.5 1.5v15a1.5 1.5 0 001.5 1.5z" />
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-gray-900 mb-1">Instant Receipt</h3>
            <p class="text-xs text-gray-600 leading-relaxed">Get instant payment confirmation &amp; receipt</p>
        </div>
    </div>
@endsection
