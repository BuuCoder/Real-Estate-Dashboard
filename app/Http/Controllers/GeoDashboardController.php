<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Ward;
use App\Models\AdministrativeUnit;
use App\Models\AdministrativeRegion;
use Illuminate\Http\Request;

class GeoDashboardController extends Controller
{
    public function index()
    {
        $provinces = Province::with('administrativeUnit')->get();
        $wards = Ward::with('province', 'administrativeUnit')->get();
        $administrativeUnits = AdministrativeUnit::all();
        $administrativeRegions = AdministrativeRegion::all();

        return view('geo_dashboard.index', compact(
            'provinces',
            'wards',
            'administrativeUnits',
            'administrativeRegions'
        ));
    }

    public function getWardsByProvince($provinceCode)
    {
        $wards = Ward::where('province_code', $provinceCode)
            ->with('administrativeUnit:id,full_name')
            ->get();
        return response()->json($wards);
    }
}
