<?php

namespace App\Http\Controllers;

use App\Models\PropertyMaster;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function show(string $propertyNumber): View
    {
        $property = PropertyMaster::with(['billData'])->where('PropertyNo', $propertyNumber)->firstOrFail();
        dd($property);
        $ownerName = trim("{$property->OwName} {$property->OwMiddleName} {$property->OwLastName}");

        return view('property.show', [
            'property' => [
                'property_number' => $property->PropertyNo,
                'owner_name' => $ownerName !== '' ? $ownerName : '--',
                'prabhag_samiti' => $property->WardName ?: '--',
                'zone' => $property->WardCode ?: '--',
                'subcode' => $property->HissaNO ?: '--',
                'block' => $property->PlotNo ?: '--',
                'address' => $property->PropertyAddress ?: '--',
            ],
        ]);
    }
}
