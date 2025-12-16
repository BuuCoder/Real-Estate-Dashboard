@extends('dashboard.layout')

@section('title', $listing->title)
@section('heading', 'Chi tiết bài đăng')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('listings.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Quay lại danh sách
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $listing->title }}</h1>
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        {{ $listing->address }}
                    </div>
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <span>Đăng bởi: {{ $listing->user->name ?? 'Không xác định' }}</span>
                        <span>•</span>
                        <span>{{ $listing->created_at->format('d/m/Y H:i') }}</span>
                        @if($listing->status)
                            <span>•</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">
                                {{ ucfirst($listing->status) }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-3xl font-bold text-green-600">
                        {{ formatVietnamesePrice($listing->price_total, $listing->currency) }}
                    </div>
                    @if($listing->area_land)
                        <div class="text-sm text-gray-500">
                            {{ formatPricePerSquareMeter($listing->price_total, $listing->area_land, $listing->currency) }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Images -->
        @if($listing->images->count() > 0)
            <div class="px-6 py-4">
                <h3 class="text-lg font-semibold mb-3">Hình ảnh</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($listing->images as $image)
                        <div class="relative">
                            <img src="{{ $image->url }}" alt="Hình ảnh bất động sản" 
                                 class="w-full h-48 object-cover rounded-lg">
                            @if($image->is_cover)
                                <span class="absolute top-2 left-2 bg-blue-600 text-white px-2 py-1 rounded text-xs">
                                    Ảnh đại diện
                                </span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Property Details -->
        <div class="px-6 py-4 border-t border-gray-200">
            <h3 class="text-lg font-semibold mb-4">Thông tin chi tiết</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Basic Info -->
                <div class="space-y-3">
                    <h4 class="font-medium text-gray-900">Thông tin cơ bản</h4>
                    
                    @if(isset($propertyTypes[$listing->property_type_id]))
                        <div class="flex justify-between">
                            <span class="text-gray-600">Loại hình:</span>
                            <span class="font-medium">{{ $propertyTypes[$listing->property_type_id]['name'] }}</span>
                        </div>
                    @endif
                    
                    @if($listing->area_land)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Diện tích đất:</span>
                            <span class="font-medium">{{ number_format($listing->area_land) }} m²</span>
                        </div>
                    @endif
                    
                    @if($listing->area_built)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Diện tích xây dựng:</span>
                            <span class="font-medium">{{ number_format($listing->area_built) }} m²</span>
                        </div>
                    @endif
                    
                    @if($listing->width && $listing->length)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Kích thước:</span>
                            <span class="font-medium">{{ $listing->width }} x {{ $listing->length }} m</span>
                        </div>
                    @endif
                </div>

                <!-- Building Details -->
                <div class="space-y-3">
                    <h4 class="font-medium text-gray-900">Chi tiết công trình</h4>
                    
                    @if($listing->bedrooms)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Phòng ngủ:</span>
                            <span class="font-medium">{{ $listing->bedrooms }}</span>
                        </div>
                    @endif
                    
                    @if($listing->bathrooms)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Phòng tắm:</span>
                            <span class="font-medium">{{ $listing->bathrooms }}</span>
                        </div>
                    @endif
                    
                    @if($listing->floors)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Số tầng:</span>
                            <span class="font-medium">{{ $listing->floors }}</span>
                        </div>
                    @endif
                    
                    @if($listing->direction)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Hướng:</span>
                            <span class="font-medium">{{ $listing->direction }}</span>
                        </div>
                    @endif
                </div>

                <!-- Legal & Location -->
                <div class="space-y-3">
                    <h4 class="font-medium text-gray-900">Pháp lý & Vị trí</h4>
                    
                    @if(isset($legalStatuses[$listing->legal_status_id]))
                        <div class="flex justify-between">
                            <span class="text-gray-600">Giấy tờ pháp lý:</span>
                            <span class="font-medium">{{ $legalStatuses[$listing->legal_status_id]['name'] }}</span>
                        </div>
                    @endif
                    
                    @if(isset($landUseTypes[$listing->land_use_type_id]))
                        <div class="flex justify-between">
                            <span class="text-gray-600">Loại đất:</span>
                            <span class="font-medium">{{ $landUseTypes[$listing->land_use_type_id]['name'] }}</span>
                        </div>
                    @endif
                    
                    @if($listing->road_width)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Đường rộng:</span>
                            <span class="font-medium">{{ $listing->road_width }} m</span>
                        </div>
                    @endif
                    
                    @if($listing->frontage)
                        <div class="flex justify-between">
                            <span class="text-gray-600">Mặt tiền:</span>
                            <span class="font-medium text-green-600">Có</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Description -->
        @if($listing->description)
            <div class="px-6 py-4 border-t border-gray-200">
                <h3 class="text-lg font-semibold mb-3">Mô tả chi tiết</h3>
                <div class="prose max-w-none text-gray-700">
                    {!! $listing->description !!}
                </div>
            </div>
        @endif

        <!-- Amenities -->
        @if($listing->amenities->count() > 0)
            <div class="px-6 py-4 border-t border-gray-200">
                <h3 class="text-lg font-semibold mb-3">Tiện ích</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($listing->amenities as $amenity)
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                            {{ $amenity->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Location Map -->
        @if($listing->lat && $listing->lng)
            <div class="px-6 py-4 border-t border-gray-200">
                <h3 class="text-lg font-semibold mb-3">Vị trí trên bản đồ</h3>
                <div class="bg-gray-100 rounded-lg p-4 text-center">
                    <p class="text-gray-600">Tọa độ: {{ $listing->lat }}, {{ $listing->lng }}</p>
                    <p class="text-sm text-gray-500 mt-1">Bản đồ sẽ được tích hợp sau</p>
                </div>
            </div>
        @endif

        <!-- Actions -->
        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
            <div class="flex justify-between items-center">
                <div class="flex space-x-3">
                    <a href="{{ route('listings.edit', $listing) }}" 
                       class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Chỉnh sửa
                    </a>
                    
                    <form action="{{ route('listings.destroy', $listing) }}" method="POST" class="inline"
                          onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài đăng này?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Xóa
                        </button>
                    </form>
                </div>
                
                <div class="text-sm text-gray-500">
                    @if($listing->published_at)
                        Xuất bản: {{ $listing->published_at->format('d/m/Y H:i') }}
                    @endif
                    @if($listing->expired_at)
                        • Hết hạn: {{ $listing->expired_at->format('d/m/Y H:i') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection