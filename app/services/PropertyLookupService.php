<?php

namespace App\Services;

class PropertyLookupService
{
    public const DEFAULT_PROPERTY_NUMBER = '01AI013944200';

    /**
     * Look up a property by number.
     *
     * This is backed by mock data until the department's property records
     * are wired up to a real data source. Any property number resolves to
     * the same sample record so the payment flow can be exercised end to end.
     *
     * @return array<string, mixed>
     */
    public function find(string $propertyNumber): array
    {
        return [
            'property_number' => $propertyNumber !== '' ? $propertyNumber : self::DEFAULT_PROPERTY_NUMBER,
            'owner_name' => 'VIJAYLAXMI RATAN WANKHEDE',
            'prabhag_samiti' => 'Unit No. 1',
            'zone' => '1',
            'subcode' => '--',
            'block' => 'UNIT NO.1',
            'address' => 'REST SHOP SHIVAJI ROAD NR SHAHAD FATAK ULHASNAGAR 1',
            'bill_number' => '2058571',
            'bill_amount' => 17341.00,
            'rebate_amount' => 139.00,
            'fine' => 0.00,
            'received_till_date' => 0.00,
            'total_due' => 17341.00,
            'payable_amount' => 17329.00,
        ];
    }
}
