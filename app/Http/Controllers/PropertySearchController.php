<?php

namespace App\Http\Controllers;

use App\Services\PropertyLookupService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertySearchController extends Controller
{
    public function index(): View
    {
        return view('search');
    }

    public function search(Request $request): RedirectResponse
    {
        $propertyNumber = trim((string) $request->query('property_number'));

        if (mb_strlen($propertyNumber) < 3) {
            $propertyNumber = PropertyLookupService::DEFAULT_PROPERTY_NUMBER;
        }

        return redirect()->route('property.show', ['propertyNumber' => mb_strtoupper($propertyNumber)]);
    }
}
