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

<body class="bg-[#ffffff] text-slate-900 antialiased">

    {{-- Header --}}
    <header class="sticky top-0 z-100 flex items-center gap-4 bg-white border-b border-[#e5e7eb] px-8 py-4"
        style="box-shadow: 0px 4px 16px 0px #0000001F;">
        <a href="{{ url('/') }}" class="flex items-center gap-4">
            <span class="flex h-13 w-13 shrink-0 items-center justify-center overflow-hidden  bg-white">
                <img src="{{ asset('images/logo.png') }}" alt="Malegaon Municipal Corporation" class="h-full w-full">
            </span>
            <span>
                <span class="block text-[22px] leading-[1.2] font-extrabold tracking-[0.3px] text-[#050273]">MALEGAON
                    PROPERTY TAX COLLECTION</span>
                <span class="mt-0.5 block text-xs font-medium tracking-[1px] text-[#6b7280] uppercase">Property Tax
                    Department</span>
            </span>
        </a>
    </header>

    {{-- Page content --}}
    @yield('content')

    @stack('scripts')
</body>

</html>
