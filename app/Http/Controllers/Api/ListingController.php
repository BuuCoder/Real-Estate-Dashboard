<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Helper to format price_total
    private function formatPriceTotal($price)
    {
        if ($price >= 1000000000) {
            $ty = floor($price / 1000000000);
            $tramTrieu = floor(($price % 1000000000) / 1000000) / 100;
            $result = $ty . ' tỷ';
            if ($tramTrieu > 0) {
                $result .= ' ' . number_format($tramTrieu, 1) . ' triệu';
            }
            return trim($result);
        } elseif ($price >= 1000000) {
            $trieu = floor($price / 1000000);
            $tramNghin = floor(($price % 1000000) / 1000);
            $result = $trieu . ' triệu';
            if ($tramNghin > 0) {
                $result .= ' ' . $tramNghin . ' nghìn';
            }
            return trim($result);
        }
        return (string)$price;
    }

    // GET /api/listings
    public function index(Request $request)
    {
        $query = Listing::with(['images', 'amenities']);

        // Search filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%');
            });
        }

        // Price range filter
        if ($min = $request->input('price_total_min')) {
            $query->where('price_total', '>=', $min);
        }
        if ($max = $request->input('price_total_max')) {
            $query->where('price_total', '<=', $max);
        }

        // Area range filter
        if ($min = $request->input('area_land_min')) {
            $query->where('area_land', '>=', $min);
        }
        if ($max = $request->input('area_land_max')) {
            $query->where('area_land', '<=', $max);
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

        // Format price_total for each listing
        $data = array_map(function ($listing) {
            $listingArr = $listing->toArray();
            $listingArr['price_total_text'] = $this->formatPriceTotal($listingArr['price_total']);
            return $listingArr;
        }, $listings->items());

        return response()->json([
            'data' => $data,
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

        $listingArr = $listing->toArray();
        $listingArr['price_total_text'] = $this->formatPriceTotal($listingArr['price_total']);

        return response()->json(['data' => $listingArr]);
    }
}
