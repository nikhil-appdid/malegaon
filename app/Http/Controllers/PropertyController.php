<?php

namespace App\Http\Controllers;

use App\Services\PropertyLookupService;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function __construct(private readonly PropertyLookupService $properties) {}

    public function show(string $propertyNumber): View
    {
        return view('property.show', [
            'property' => $this->properties->find($propertyNumber),
        ]);
    }
}
