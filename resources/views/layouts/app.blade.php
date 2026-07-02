<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Property Tax Department') - {{ config('app.name', 'Malegaon Property Tax Collection') }}</title>

    @fonts

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-[#F5F6FA] text-slate-900 antialiased">

    {{-- Header --}}
    <header class="bg-white border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center gap-3">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Malegaon Property Tax Collection" class="h-[5rem]">
                <div>
                    <h1 class="text-[28px] font-semibold leading-[100%] tracking-normal text-[#1B2A6B] mb-2">MALEGAON
                        PROPERTY TAX
                        COLLECTION</h1>
                    <p class="text-[16px] font-normal leading-4.5 tracking-normal text-[#4F4F4F]">PROPERTY TAX
                        DEPARTMENT</p>
                </div>
            </a>
        </div>
    </header>


    {{-- NIL charges banner --}}
    <div class="bg-[#0502731A]">
        <div class="max-w-5xl mx-auto px-6 py-2.5 flex items-center gap-2">
            <svg class="w-4 h-4 text-[#050273] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
            </svg>
            <span class="text-[16px] font-semibold leading-[100%] tracking-normal text-[#050273]">Transactions Charges:
                NIL for all
                Debit Cards &amp; UPI</span>
        </div>
    </div>
    {{-- Page content --}}
    <main class="max-w-3xl mx-auto px-6 py-12">
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>
