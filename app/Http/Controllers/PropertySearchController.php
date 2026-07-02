<?php

namespace App\Http\Controllers;

use App\Models\BillData;
use App\Models\PropertyMaster;
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
        //PropertyNo
        //NP3NP4B1143
        $request->validate([
            'property_number' => 'required',
        ]);

        // $property = PropertyMaster::where('PropertyNo', $request->input('property_number'))->get();
        // dd(array_keys($property->getAttributes()));
        // dd($property);

        return redirect()->route('property.show', ['propertyNumber' => mb_strtoupper($request->input('property_number'))]);
    }
}
