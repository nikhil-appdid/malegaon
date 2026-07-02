<?php

namespace App\Services;

use App\Models\BillData;
use App\Models\PaymentData;

class PropertyLookupService
{
    private const ACTIVE_BILL_PERIOD = '2025-2026';

    /**
     * Look up a property's current active bill, owner, and address details.
     *
     * @return array<string, mixed>
     */
    public function find(string $propertyNumber): array
    {
        $bill = BillData::with('property')
            ->where('BillPeriod', self::ACTIVE_BILL_PERIOD)
            ->where('BillStatus', 'Active')
            ->where('PropertyNo', $propertyNumber)
            ->firstOrFail();

        $property = $bill->property;
        $ownerName = trim("{$property->OwName} {$property->OwMiddleName} {$property->OwLastName}");

        $receivedTillDate = (float) PaymentData::where('BillId', $bill->BillId)
            ->where('PaymentStatus', 'Active')
            ->sum('NetPaidAmount');

        $billAmount = (float) $bill->GrandTotal;
        $fine = (float) $bill->LatePaymentPenalty + (float) $bill->ArrearsLatePaymentPenalty;

        // BillData only carries a Yes/No DiscountApplicable flag, not an
        // amount — the real discount only exists once a payment records one
        // (PaymentData.DiscountAmount), so there's nothing to show pre-payment.
        $rebateAmount = 0.0;

        $payableAmount = max($billAmount - $rebateAmount - $receivedTillDate, 0.0);

        return [
            'property_number' => $property->PropertyNo,
            'owner_name' => $ownerName !== '' ? $ownerName : '--',
            'prabhag_samiti' => $this->clean($property->PrabhagNo),
            'zone' => $this->clean($property->WardName),
            'subcode' => $this->clean($property->HissaNO),
            'block' => $this->clean($property->PlotNo),
            'address' => $this->clean($property->PropertyAddress),
            'bill_number' => $bill->BillId,
            'bill_amount' => $billAmount,
            'rebate_amount' => $rebateAmount,
            'fine' => $fine,
            'received_till_date' => $receivedTillDate,
            'total_due' => $billAmount,
            'payable_amount' => $payableAmount,
        ];
    }

    /**
     * The source database uses the literal string "-" (and sometimes an
     * empty string) as its "no value" sentinel instead of null.
     */
    private function clean(?string $value): string
    {
        $value = trim((string) $value);

        return in_array($value, ['', '-'], true) ? '--' : $value;
    }
}
