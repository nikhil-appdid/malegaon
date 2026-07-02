@extends('layouts.app')

@section('title', 'Pay Property Tax')

@php
    $propertyRows = [
        'Property Number' => $property['property_number'],
        'Owner Name' => $property['owner_name'],
        'Subcode' => $property['subcode'],
        'Address' => $property['address'],
    ];

    $paymentRows = [
        'Bill Number' => $property['bill_number'],
        'Bill Amount' => '₹' . number_format($property['bill_amount'], 2),
        'Rebate Amount' => '₹' . number_format($property['rebate_amount'], 2),
        'Fine' => '₹' . number_format($property['fine'], 2),
        'Received Till Date' => '₹' . number_format($property['received_till_date'], 2),
    ];
@endphp

@section('content')
    <div class="mx-auto my-8 grid max-w-[960px] animate-fade-in grid-cols-1 items-start gap-5 px-4 lg:grid-cols-2">
        {{-- Left column --}}
        <div class="flex flex-col gap-4">
            {{-- Property Details --}}
            <div class="overflow-hidden rounded-xl border-[1.5px] border-[#e5e7eb] bg-white">
                <div class="flex items-center gap-2 border-b-[1.5px] border-[#c5cae9] bg-[#eef0fb] px-4.5 py-3">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24">
                        <rect x="5" y="4" width="14" height="17" rx="2" stroke="#1a237e" stroke-width="2" />
                        <path d="M9 9h6M9 13h4" stroke="#1a237e" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <span class="text-sm font-bold text-[#1a237e]">Property Details</span>
                </div>
                <div class="flex flex-col gap-3 px-4.5 py-4">
                    @foreach ($propertyRows as $label => $value)
                        <div class="flex gap-2">
                            <span class="min-w-[110px] text-xs text-[#6b7280]">{{ $label }}:</span>
                            <span class="text-[13px] font-semibold text-[#1f2937]">{{ $value }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Payment Details --}}
            <div class="overflow-hidden rounded-xl border-[1.5px] border-[#e5e7eb] bg-white">
                <div class="flex items-center gap-2 border-b-[1.5px] border-[#c5cae9] bg-[#eef0fb] px-4.5 py-3">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24">
                        <rect x="2" y="6" width="20" height="14" rx="2" stroke="#1a237e" stroke-width="2" />
                        <path d="M2 10h20" stroke="#1a237e" stroke-width="2" />
                    </svg>
                    <span class="text-sm font-bold text-[#1a237e]">Payment Details</span>
                </div>
                <div class="flex flex-col gap-2.5 px-4.5 py-4">
                    @foreach ($paymentRows as $label => $value)
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-[#6b7280]">{{ $label }}:</span>
                            <span class="text-[13px] font-semibold text-[#1f2937]">{{ $value }}</span>
                        </div>
                    @endforeach
                    <div class="h-px bg-[#e5e7eb]"></div>
                    <div class="flex items-center justify-between">
                        <span class="text-[13px] font-bold text-[#1f2937]">Total Due:</span>
                        <span
                            class="text-sm font-bold text-[#1a237e]">₹{{ number_format($property['total_due'], 2) }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right column --}}
        <div class="flex flex-col gap-4 rounded-xl border-[1.5px] border-[#e5e7eb] bg-white p-5">
            <form action="{{ route('payment.pay', $property['property_number']) }}" method="POST"
                class="flex flex-col gap-4">
                @csrf

                <div>
                    <div class="mb-1.5">
                        <span class="text-[13px] font-semibold text-[#1f2937]">Mobile Number</span>
                        <span class="ml-0.5 text-[#e53935]">*</span>
                    </div>
                    <div class="flex items-center overflow-hidden rounded-lg border-[1.5px] border-[#d1d5db]">
                        <div class="flex h-11 items-center border-r border-[#e5e7eb] bg-[#f9fafb] px-3">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                                <rect x="5" y="2" width="14" height="20" rx="3" stroke="#6b7280"
                                    stroke-width="2" />
                                <circle cx="12" cy="18" r="1" fill="#6b7280" />
                            </svg>
                        </div>
                        <input name="mobile" type="tel" placeholder="9818522692" required pattern="[0-9]{10}"
                            maxlength="10"
                            class="h-11 flex-1 border-none px-3.5 font-sans text-sm text-[#1f2937] outline-none" />
                    </div>
                    @error('mobile')
                        <p class="mt-1 text-xs text-[#e53935]">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <div class="mb-1.5">
                        <span class="text-[13px] font-semibold text-[#1f2937]">Email ID</span>
                        <span class="ml-0.5 text-[#e53935]">*</span>
                    </div>
                    <div class="flex items-center overflow-hidden rounded-lg border-[1.5px] border-[#d1d5db]">
                        <div class="flex h-11 items-center border-r border-[#e5e7eb] bg-[#f9fafb] px-3">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                                <rect x="2" y="4" width="20" height="16" rx="3" stroke="#6b7280"
                                    stroke-width="2" />
                                <path d="M2 8l10 7 10-7" stroke="#6b7280" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <input name="email" type="email" placeholder="vijaylaxmi@gmail.com" required
                            class="h-11 flex-1 border-none px-3.5 font-sans text-sm text-[#1f2937] outline-none" />
                    </div>
                    @error('email')
                        <p class="mt-1 text-xs text-[#e53935]">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Important note --}}
                <div class="rounded-lg border border-[#fed7aa] bg-[#fff8f0] p-3.5">
                    <div class="mb-2 text-xs font-bold text-[#92400e]">Important Note:</div>
                    <div class="text-[11px] leading-[1.7] text-[#57534e]">
                        You are responsible to ensure that at the Debit / Credit Card or Bank account details provided by
                        you are accurate.
                        By clicking the &quot;Pay&quot; button, you authorize Malegaon / Credit Card or Bank account for the
                        settlement of bills selected by you along with it applicable time.
                        You are responsible to ensure that sufficient credit is available on your Debit/Credit Card or Bank
                        Account at the time of making the payment to fund the payment of the bill(s) selected by you/time of
                        the applicable time.
                        You are authorizing the debit to the nominated Debit / Credit Card or Bank account for the
                        settlement of bills selected by you along with it applicable time.
                    </div>
                </div>

                {{-- Terms --}}
                <div class="flex items-start gap-2">
                    <input type="checkbox" id="terms" name="terms" value="1" checked required
                        class="mt-0.5 h-4 w-4 accent-[#1a237e]" />
                    <label for="terms" class="text-xs leading-[1.5] text-[#4b5563]">I agree to <span
                            class="cursor-pointer font-semibold text-[#1a237e]">Terms &amp; Conditions</span></label>
                </div>

                <button type="submit" name="intent" value="pay"
                    class="flex w-full items-center justify-center gap-2 rounded-lg bg-[#166534] py-[15px] text-[15px] font-bold text-white">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24">
                        <rect x="2" y="6" width="20" height="14" rx="2" stroke="#fff"
                            stroke-width="2" />
                        <path d="M2 10h20" stroke="#fff" stroke-width="2" />
                    </svg>
                    Pay ₹{{ number_format($property['payable_amount'], 2) }} Securely
                </button>
                <button type="submit" name="intent" value="simulate_failure" formnovalidate
                    class="w-full rounded-lg border border-[#e5e7eb] bg-white py-2.5 text-center text-xs text-[#6b7280]">
                    Simulate Payment Failure
                </button>
            </form>
        </div>
    </div>
@endsection
