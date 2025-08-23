<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Amenity;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{
    protected $propertyTypes = [
        1 => ['code' => 'house', 'name' => 'Nhà phố'],
        2 => ['code' => 'apartment', 'name' => 'Căn hộ chung cư'],
        3 => ['code' => 'land', 'name' => 'Đất nền'],
        4 => ['code' => 'villa', 'name' => 'Biệt thự'],
        5 => ['code' => 'shophouse', 'name' => 'Shophouse'],
        6 => ['code' => 'office', 'name' => 'Văn phòng'],
        7 => ['code' => 'townhouse', 'name' => 'Nhà liền kề'],
        8 => ['code' => 'warehouse', 'name' => 'Kho xưởng'],
        9 => ['code' => 'farm', 'name' => 'Trang trại/Nhà vườn'],
    ];

    protected $landUseTypes = [
        1 => ['code' => 'ODT', 'name' => 'Đất ở đô thị', 'descr' => 'Đất thổ cư trong khu vực đô thị'],
        2 => ['code' => 'ONT', 'name' => 'Đất ở nông thôn', 'descr' => 'Đất thổ cư tại khu vực nông thôn'],
        3 => ['code' => 'CLN', 'name' => 'Đất trồng cây lâu năm', 'descr' => 'Đất dùng cho trồng cây công nghiệp, cây ăn quả lâu năm'],
        4 => ['code' => 'CHN', 'name' => 'Đất trồng cây hàng năm', 'descr' => 'Đất trồng lúa, hoa màu, rau…'],
        5 => ['code' => 'NNP', 'name' => 'Đất nông nghiệp khác', 'descr' => 'Đất sử dụng vào mục đích nông nghiệp khác'],
        6 => ['code' => 'RSX', 'name' => 'Đất rừng sản xuất', 'descr' => 'Đất để phát triển rừng sản xuất'],
        7 => ['code' => 'RPH', 'name' => 'Đất rừng phòng hộ', 'descr' => 'Đất rừng nhằm mục đích phòng hộ'],
        8 => ['code' => 'RDD', 'name' => 'Đất rừng đặc dụng', 'descr' => 'Đất rừng bảo tồn, nghiên cứu, du lịch sinh thái'],
        9 => ['code' => 'TMD', 'name' => 'Đất thương mại dịch vụ', 'descr' => 'Đất sử dụng vào mục đích kinh doanh, thương mại, dịch vụ'],
        10 => ['code' => 'SKC', 'name' => 'Đất sản xuất kinh doanh phi nông nghiệp', 'descr' => 'Nhà xưởng, cơ sở sản xuất ngoài nông nghiệp'],
        11 => ['code' => 'DTS', 'name' => 'Đất tôn giáo tín ngưỡng', 'descr' => 'Đất cơ sở tôn giáo, tín ngưỡng'],
        12 => ['code' => 'DGD', 'name' => 'Đất giáo dục', 'descr' => 'Đất trường học, cơ sở giáo dục'],
        13 => ['code' => 'DYT', 'name' => 'Đất y tế', 'descr' => 'Đất bệnh viện, cơ sở y tế'],
        14 => ['code' => 'CQP', 'name' => 'Đất quốc phòng', 'descr' => 'Đất sử dụng cho mục đích quốc phòng, an ninh'],
    ];

    protected $legalStatuses = [
        1 => ['code' => 'sodo', 'name' => 'Sổ đỏ'],
        2 => ['code' => 'sohong', 'name' => 'Sổ hồng'],
        3 => ['code' => 'hdmb', 'name' => 'Hợp đồng mua bán'],
        4 => ['code' => 'giayphepxd', 'name' => 'Giấy phép xây dựng'],
        5 => ['code' => 'dangcapnhat', 'name' => 'Đang cập nhật'],
    ];

    public function index()
    {
        $listings = Listing::with(['images', 'amenities'])->paginate(10);
        return view('listings.index', compact('listings'));
    }

    public function create()
    {
        $amenities = Amenity::all();
        $provinces = \App\Models\Province::orderBy('name', 'asc')->get();
        $wards = \App\Models\Ward::orderBy('name', 'asc')->get();
        $propertyTypes = $this->propertyTypes;
        $landUseTypes = $this->landUseTypes;
        $legalStatuses = $this->legalStatuses;
        return view('listings.create', compact('amenities', 'provinces', 'wards', 'propertyTypes', 'landUseTypes', 'legalStatuses'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'property_type_id' => 'required|integer',
            'land_use_type_id' => 'nullable|integer',
            'legal_status_id' => 'nullable|integer',
            'province_id' => 'required',
            'ward_id' => 'required',
            'street' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'area_land' => 'nullable|numeric',
            'area_built' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'road_width' => 'nullable|numeric',
            'frontage' => 'nullable|boolean',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'floors' => 'nullable|integer',
            'direction' => 'nullable|string|max:50',
            'price_total' => 'nullable|numeric',
            'currency' => 'nullable|string|max:10',
            'status' => 'nullable|string|max:50',
            'published_at' => 'nullable|date',
            'expired_at' => 'nullable|date',
            'amenities' => 'nullable|array',
            'amenities.*' => 'integer|exists:amenities,id',
            'images' => 'nullable|array',
            'images.*.url' => 'required_with:images|string|max:255',
            'images.*.is_cover' => 'nullable|boolean',
            'images.*.sort_order' => 'nullable|integer',
        ]);

        if (empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        DB::transaction(function () use ($data, $request) {
            $listingData = $data;
            unset($listingData['amenities'], $listingData['images']);
            $listing = Listing::create($listingData);

            if (isset($data['amenities'])) {
                $listing->amenities()->sync($data['amenities']);
            }

            if (isset($data['images'])) {
                foreach ($data['images'] as $img) {
                    $listing->images()->create([
                        'url' => $img['url'],
                        'is_cover' => $img['is_cover'] ?? false,
                        'sort_order' => $img['sort_order'] ?? 0,
                    ]);
                }
            }
        });
        return redirect()->route('listings.index')->with('success', 'Listing created.');
    }

    public function edit($id)
    {
        
        $listing = Listing::with(['amenities', 'images'])->findOrFail($id);
        $amenities = Amenity::all();
        $provinces = \App\Models\Province::orderBy('name', 'asc')->get();
        $wards = \App\Models\Ward::orderBy('name', 'asc')->get();
        $propertyTypes = $this->propertyTypes;
        $landUseTypes = $this->landUseTypes;
        $legalStatuses = $this->legalStatuses;
        return view('listings.edit', compact('listing', 'amenities', 'provinces', 'wards', 'propertyTypes', 'landUseTypes', 'legalStatuses'));
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'property_type_id' => 'required|integer',
            'land_use_type_id' => 'nullable|integer',
            'legal_status_id' => 'nullable|integer',
            'province_id' => 'required',
            'ward_id' => 'required',
            'street' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'area_land' => 'nullable|numeric',
            'area_built' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'road_width' => 'nullable|numeric',
            'frontage' => 'nullable|boolean',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'floors' => 'nullable|integer',
            'direction' => 'nullable|string|max:50',
            'price_total' => 'nullable|numeric',
            'currency' => 'nullable|string|max:10',
            'status' => 'nullable|string|max:50',
            'published_at' => 'nullable|date',
            'expired_at' => 'nullable|date',
            'amenities' => 'nullable|array',
            'amenities.*' => 'integer|exists:amenities,id',
            'images' => 'nullable|array',
            'images.*.url' => 'required_with:images|string|max:255',
            'images.*.is_cover' => 'nullable|boolean',
            'images.*.sort_order' => 'nullable|integer',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $data = $validator->validated();

        DB::transaction(function () use ($listing, $data) {
            $listingData = $data;
            unset($listingData['amenities'], $listingData['images']);
            $listing->update($listingData);

            $listing->amenities()->sync($data['amenities'] ?? []);

            if (isset($data['images'])) {
                $listing->images()->delete();
                foreach ($data['images'] as $img) {
                    $listing->images()->create([
                        'url' => $img['url'],
                        'is_cover' => $img['is_cover'] ?? false,
                        'sort_order' => $img['sort_order'] ?? 0,
                    ]);
                }
            }
        });

        return redirect()->route('listings.index')->with('success', 'Listing updated.');
    }

    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);
        $listing->amenities()->detach();
        $listing->images()->delete();
        $listing->delete();
        return redirect()->route('listings.index')->with('success', 'Listing deleted.');
    }
}
