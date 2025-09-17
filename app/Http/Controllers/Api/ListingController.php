<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    protected $propertyTypes = [
        1 => ['id' => 1, 'code' => 'house', 'name' => 'Nhà phố'],
        2 => ['id' => 2, 'code' => 'apartment', 'name' => 'Căn hộ chung cư'],
        3 => ['id' => 3, 'code' => 'land', 'name' => 'Đất nền'],
        4 => ['id' => 4, 'code' => 'villa', 'name' => 'Biệt thự'],
        5 => ['id' => 5, 'code' => 'shophouse', 'name' => 'Shophouse'],
        6 => ['id' => 6, 'code' => 'office', 'name' => 'Văn phòng'],
        7 => ['id' => 7, 'code' => 'townhouse', 'name' => 'Nhà liền kề'],
        8 => ['id' => 8, 'code' => 'warehouse', 'name' => 'Kho xưởng'],
        9 => ['id' => 9, 'code' => 'farm', 'name' => 'Trang trại/Nhà vườn'],
    ];

    protected $landUseTypes = [
        1 => ['id' => 1, 'code' => 'ODT', 'name' => 'Đất ở đô thị', 'descr' => 'Đất thổ cư trong khu vực đô thị'],
        2 => ['id' => 2, 'code' => 'ONT', 'name' => 'Đất ở nông thôn', 'descr' => 'Đất thổ cư tại khu vực nông thôn'],
        3 => ['id' => 3, 'code' => 'CLN', 'name' => 'Đất trồng cây lâu năm', 'descr' => 'Đất dùng cho trồng cây công nghiệp, cây ăn quả lâu năm'],
        4 => ['id' => 4, 'code' => 'CHN', 'name' => 'Đất trồng cây hàng năm', 'descr' => 'Đất trồng lúa, hoa màu, rau…'],
        5 => ['id' => 5, 'code' => 'NNP', 'name' => 'Đất nông nghiệp khác', 'descr' => 'Đất sử dụng vào mục đích nông nghiệp khác'],
        6 => ['id' => 6, 'code' => 'RSX', 'name' => 'Đất rừng sản xuất', 'descr' => 'Đất để phát triển rừng sản xuất'],
        7 => ['id' => 7, 'code' => 'RPH', 'name' => 'Đất rừng phòng hộ', 'descr' => 'Đất rừng nhằm mục đích phòng hộ'],
        8 => ['id' => 8, 'code' => 'RDD', 'name' => 'Đất rừng đặc dụng', 'descr' => 'Đất rừng bảo tồn, nghiên cứu, du lịch sinh thái'],
        9 => ['id' => 9, 'code' => 'TMD', 'name' => 'Đất thương mại dịch vụ', 'descr' => 'Đất sử dụng vào mục đích kinh doanh, thương mại, dịch vụ'],
        10 => ['id' => 10, 'code' => 'SKC', 'name' => 'Đất sản xuất kinh doanh phi nông nghiệp', 'descr' => 'Nhà xưởng, cơ sở sản xuất ngoài nông nghiệp'],
        11 => ['id' => 11, 'code' => 'DTS', 'name' => 'Đất tôn giáo tín ngưỡng', 'descr' => 'Đất cơ sở tôn giáo, tín ngưỡng'],
        12 => ['id' => 12, 'code' => 'DGD', 'name' => 'Đất giáo dục', 'descr' => 'Đất trường học, cơ sở giáo dục'],
        13 => ['id' => 13, 'code' => 'DYT', 'name' => 'Đất y tế', 'descr' => 'Đất bệnh viện, cơ sở y tế'],
        14 => ['id' => 14, 'code' => 'CQP', 'name' => 'Đất quốc phòng', 'descr' => 'Đất sử dụng cho mục đích quốc phòng, an ninh'],
    ];

    protected $legalStatuses = [
        1 => ['id' => 1, 'code' => 'sodo', 'name' => 'Sổ đỏ'],
        2 => ['id' => 2, 'code' => 'sohong', 'name' => 'Sổ hồng'],
        3 => ['id' => 3, 'code' => 'hdmb', 'name' => 'Hợp đồng mua bán'],
        4 => ['id' => 4, 'code' => 'giayphepxd', 'name' => 'Giấy phép xây dựng'],
        5 => ['id' => 5, 'code' => 'dangcapnhat', 'name' => 'Đang cập nhật'],
    ];

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
        $query = Listing::with(['images', 'amenities', 'province', 'ward']);

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

        if ($bedrooms = $request->input('bedrooms')) {
            $query->where('bedrooms', $bedrooms);
        }
        if ($bathrooms = $request->input('bathrooms')) {
            $query->where('bathrooms', $bathrooms);
        }
        if ($floors = $request->input('floors')) {
            $query->where('floors', $floors);
        }
        if ($direction = $request->input('direction')) {
            $query->whereRaw('LOWER(direction) LIKE ?', ['%' . strtolower($direction) . '%']);
        }

        if ($amenities = $request->input('amenities')) {
            $query->whereHas('amenities', function ($q) use ($amenities) {
                $q->whereIn('amenities.code', (array)$amenities);
            });
        }

        if ($propertyTypeId = $request->input('property_type_id')) {
            $query->where('property_type_id', $propertyTypeId);
        }

        if ($landUseTypeId = $request->input('land_use_type_id')) {
            $query->where('land_use_type_id', $landUseTypeId);
        }

        if ($provinceId = $request->input('province_id')) {
            $query->where('province_id', $provinceId);
        }
        if ($wardId = $request->input('ward_id')) {
            $query->where('ward_id', $wardId);
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

    // GET /api/listings/{slug}
    public function show($slug)
    {
        $listing = Listing::with(['images', 'amenities', 'province', 'ward'])->where('slug', $slug)->first();

        if (!$listing) {
            return response()->json(['error' => 'Listing not found'], 404);
        }

        $listingArr = $listing->toArray();
        $listingArr['price_total_text'] = $this->formatPriceTotal($listingArr['price_total']);

        return response()->json(['data' => $listingArr]);
    }

    // GET /api/listings/meta_listing
    public function meta()
    {
        $cacheKey = 'meta_listing_data_v1';
        // $cacheTtl = 60 * 60 * 24; // 24 hours
        $cacheTtl = 0; // 24 hours

        $data = cache()->remember($cacheKey, $cacheTtl, function () {
            $amenities = Amenity::all();
            $provinces = \App\Models\Province::orderBy('name', 'asc')->get();
            $wards = \App\Models\Ward::orderBy('name', 'asc')->get()->groupBy('province_code');
            return [
                'property_types' => $this->propertyTypes,
                'land_use_types' => $this->landUseTypes,
                'legal_statuses' => $this->legalStatuses,
                'provinces' => $provinces,
                'wards' => $wards,
                'amenities' => $amenities,
            ];
        });

        return response()->json($data);
    }
}
