<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessPaymentRequest;
use App\Services\PropertyLookupService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function __construct(private readonly PropertyLookupService $properties) {}

    public function show(string $propertyNumber): View
    {
        return view('payment.show', [
            'property' => $this->properties->find($propertyNumber),
        ]);
    }

    public function pay(ProcessPaymentRequest $request, string $propertyNumber): RedirectResponse
    {
        return $request->validated('intent') === 'simulate_failure'
            ? redirect()->route('payment.failed')
            : redirect()->route('payment.success');
    }

    public function success(): View
    {
        return view('payment.success');
    }

    public function failed(): View
    {
        return view('payment.failed');
    }
}
