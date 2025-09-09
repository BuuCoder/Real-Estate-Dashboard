<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // GET /api/listings
    public function index(Request $request)
    {
        $query = Listing::with(['images', 'amenities']);

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%');
            });
        }

        $sort = $request->input('sort', 'created_at');
        $direction = $request->input('direction', 'desc');
        $allowedSorts = ['price_total', 'created_at', 'area_land'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'created_at';
        }
        if (!in_array(strtolower($direction), ['asc', 'desc'])) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);

        $listings = $query->paginate(10);

        return response()->json([
            'data' => $listings->items(),
            'meta' => [
                'current_page' => $listings->currentPage(),
                'last_page' => $listings->lastPage(),
                'per_page' => $listings->perPage(),
                'total' => $listings->total(),
            ]
        ]);
    }

    // GET /api/listings/{id}
    public function show($id)
    {
        $listing = Listing::with(['images', 'amenities'])->find($id);

        if (!$listing) {
            return response()->json(['error' => 'Listing not found'], 404);
        }

        return response()->json(['data' => $listing]);
    }
}
