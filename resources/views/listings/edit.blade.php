@extends('dashboard.layout')

@section('title', 'Chỉnh sửa Bài Đăng')

@section('content')
    <div class="container mx-auto py-8 max-w-full">
        <h2 class="text-xl md:text-2xl font-extrabold mb-2">Chỉnh sửa Bài Đăng</h2>
        <form action="{{ route('listings.update', $listing) }}" method="POST"
            class="bg-white rounded-3xl shadow-panel px-8 py-2 pb-8 space-y-5">
            @csrf @method('PUT')
            <div>
                <label class="block text-sm font-medium mb-1">Loại BĐS (Property Type)</label>
                <select name="property_type_id"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    required>
                    <option value="">-- Chọn loại BĐS --</option>
                    @foreach ($propertyTypes as $id => $type)
                        <option value="{{ $id }}" @if (old('property_type_id', $listing->property_type_id) == $id) selected @endif>
                            {{ $type['name'] }}
                        </option>
                    @endforeach
                </select>
                @error('property_type_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Loại đất (Land Use Type)</label>
                <select name="land_use_type_id"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <option value="">-- Chọn loại đất --</option>
                    @foreach ($landUseTypes as $id => $type)
                        <option value="{{ $id }}" @if (old('land_use_type_id', $listing->land_use_type_id) == $id) selected @endif>
                            {{ $type['name'] }}
                        </option>
                    @endforeach
                </select>
                @error('land_use_type_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Tình trạng pháp lý (Legal Status)</label>
                <select name="legal_status_id"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <option value="">-- Chọn tình trạng pháp lý --</option>
                    @foreach ($legalStatuses as $id => $status)
                        <option value="{{ $id }}" @if (old('legal_status_id', $listing->legal_status_id) == $id) selected @endif>
                            {{ $status['name'] }}
                        </option>
                    @endforeach
                </select>
                @error('legal_status_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Tỉnh/Thành</label>
                    <select name="province_id" id="province-select"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                        required>
                        <option value="">-- Chọn Tỉnh/Thành --</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->code }}" @if (old('province_id', $listing->province_id) == $province->code) selected @endif>
                                {{ $province->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('province_code')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Phường/Xã</label>
                    <select name="ward_id" id="ward-select"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                        required>
                        <option value="">-- Chọn Phường/Xã --</option>
                        @foreach ($wards as $ward)
                            @if ($ward->province_code == old('province_id', $listing->province_id))
                                <option value="{{ $ward->code }}" @if (old('ward_id', $listing->ward_id) == $ward->code) selected @endif>
                                    {{ $ward->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    @error('ward_code')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <script>
                    // Dữ liệu wards dạng JS để lọc động
                    window.allWards = @json($wards);
                    document.getElementById('province-select').addEventListener('change', function() {
                        const provinceCode = this.value;
                        const wardSelect = document.getElementById('ward-select');
                        wardSelect.innerHTML = '<option value="">-- Chọn Phường/Xã --</option>';
                        window.allWards.forEach(function(ward) {
                            if (ward.province_code === provinceCode) {
                                let selected = '';
                                if (ward.code === '{{ old('ward_code', $listing->ward_code) }}') selected = 'selected';
                                wardSelect.innerHTML +=
                                `<option value="${ward.code}" ${selected}>${ward.name}</option>`;
                            }
                        });
                    });
                </script>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Đường</label>
                <input name="street" value="{{ old('street', $listing->street) }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('street')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Địa chỉ</label>
                <input name="address" value="{{ old('address', $listing->address) }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('address')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Vĩ độ (Latitude)</label>
                    <input name="lat" value="{{ old('lat', $listing->lat) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('lat')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Kinh độ (Longitude)</label>
                    <input name="lng" value="{{ old('lng', $listing->lng) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('lng')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Tiêu đề</label>
                <input name="title" value="{{ old('title', $listing->title) }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    required>
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Mô tả</label>
                <textarea name="description"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    rows="3">{{ old('description', $listing->description) }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Diện tích đất (m²)</label>
                    <input name="area_land" value="{{ old('area_land', $listing->area_land) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('area_land')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Diện tích XD (m²)</label>
                    <input name="area_built" value="{{ old('area_built', $listing->area_built) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('area_built')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Chiều rộng (m)</label>
                    <input name="width" value="{{ old('width', $listing->width) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('width')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Chiều dài (m)</label>
                    <input name="length" value="{{ old('length', $listing->length) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('length')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Lộ giới (m)</label>
                    <input name="road_width" value="{{ old('road_width', $listing->road_width) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('road_width')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Mặt tiền</label>
                    <select name="frontage"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                        <option value="">--</option>
                        <option value="1" @if (old('frontage', $listing->frontage) == 1) selected @endif>Có</option>
                        <option value="0" @if (old('frontage', $listing->frontage) === 0 || old('frontage', $listing->frontage) === '0') selected @endif>Không</option>
                    </select>
                    @error('frontage')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Số phòng ngủ</label>
                    <input name="bedrooms" value="{{ old('bedrooms', $listing->bedrooms) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('bedrooms')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Số phòng tắm</label>
                    <input name="bathrooms" value="{{ old('bathrooms', $listing->bathrooms) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('bathrooms')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Số tầng</label>
                    <input name="floors" value="{{ old('floors', $listing->floors) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('floors')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Hướng</label>
                    <input name="direction" value="{{ old('direction', $listing->direction) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('direction')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Đơn vị tiền</label>
                    <input name="currency" value="{{ old('currency', $listing->currency) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                        id="currency-input">
                    @error('currency')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Giá tổng (theo đơn vị tiền)</label>
                    <input 
                        value="{{ old('price_total', number_format($listing->price_total, 0, ',', '.')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                        id="price-total-input">
                    <input type="hidden" name="price_total" id="price-total" value="{{ old('price_total', $listing->price_total) }}">
                    @error('price_total')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    <div id="price-total-text" class="text-xs text-red-500 mt-1"></div>
                </div>
                <script>
                    function formatVND(num) {
                        num = num.toString().replace(/[^\d]/g, '');
                        if (!num) return '';
                        return Number(num).toLocaleString('vi-VN');
                    }

                    function numberToWordsVND(number) {
                        // Đọc đến hàng tỷ
                        const units = ["", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"];
                        let n = parseInt(number, 10);
                        if (isNaN(n) || n === 0) return "";
                        let str = "";

                        if (n >= 1000000000) {
                            str += Math.floor(n / 1000000000) + " tỷ ";
                            n = n % 1000000000;
                        }
                        if (n >= 1000000) {
                            str += Math.floor(n / 1000000) + " triệu ";
                            n = n % 1000000;
                        }
                        if (n >= 1000) {
                            str += Math.floor(n / 1000) + " nghìn ";
                            n = n % 1000;
                        }
                        if (n > 0) {
                            str += n + " đồng";
                        }
                        return str.trim();
                    }

                    function numberToWordsUSD(number) {
                        let n = parseInt(number, 10);
                        if (isNaN(n) || n === 0) return "";
                        return n + " dollars";
                    }

                    const currencyInput = document.getElementById('currency-input');
                    const priceInput = document.getElementById('price-total-input');
                    const priceText = document.getElementById('price-total-text');
                    const priceRawInput = document.getElementById('price-total');

                    function handlePriceFormat() {
                        let raw = priceInput.value.replace(/[^\d]/g, '');
                        priceRawInput.value = raw;
                        if (currencyInput.value.trim().toUpperCase() === 'VND') {
                            priceInput.value = formatVND(raw);
                            priceText.textContent = numberToWordsVND(raw);
                        } else if (currencyInput.value.trim().toUpperCase() === 'USD') {
                            priceInput.value = raw;
                            priceText.textContent = numberToWordsUSD(raw);
                        } else {
                            priceInput.value = raw;
                            priceText.textContent = "";
                        }
                    }

                    currencyInput.addEventListener('change', handlePriceFormat);
                    priceInput.addEventListener('input', handlePriceFormat);

                    // Format on page load
                    document.addEventListener('DOMContentLoaded', handlePriceFormat);
                </script>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Trạng thái</label>
                    <select name="status"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                        <option value="draft" @if (old('status', $listing->status) == 'draft') selected @endif>Nháp</option>
                        <option value="published" @if (old('status', $listing->status) == 'published') selected @endif>Đã đăng</option>
                        <option value="paused" @if (old('status', $listing->status) == 'paused') selected @endif>Tạm dừng</option>
                        <option value="sold" @if (old('status', $listing->status) == 'sold') selected @endif>Đã bán</option>
                        <option value="expired" @if (old('status', $listing->status) == 'expired') selected @endif>Hết hạn</option>
                    </select>
                    @error('status')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Ngày đăng</label>
                    <input disabled name="published_at" type="date"
                        value="{{ old('published_at', optional($listing->published_at)->format('Y-m-d')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400 opacity-60 cursor-not-allowed">
                    @error('published_at')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Ngày hết hạn</label>
                    <input name="expired_at" type="date"
                        value="{{ old('expired_at', optional($listing->expired_at)->format('Y-m-d')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    @error('expired_at')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Tiện ích</label>
                <div class="flex flex-wrap gap-3">
                    @foreach ($amenities as $amenity)
                        <label
                            class="flex items-center gap-2 bg-gray-100 rounded-xl px-3 py-2 border border-gray-200 cursor-pointer">
                            <input type="checkbox" name="amenities[]" value="{{ $amenity->id }}"
                                @if (collect(old('amenities', $listing->amenities->pluck('id')->toArray()))->contains($amenity->id)) checked @endif class="form-checkbox accent-brand-600">
                            <span class="text-sm">{{ $amenity->name }}</span>
                        </label>
                    @endforeach
                </div>
                @error('amenities')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Ảnh</label>
                <div id="images-list" class="space-y-2">
                    @foreach (old('images', $listing->images) as $i => $img)
                        <div
                            class="flex flex-col md:flex-row items-start md:items-center gap-2 bg-gray-50 rounded-xl p-3 border border-gray-200 relative group">
                            <div class="flex-1 w-full flex gap-2 items-center">
                                <input name="images[{{ $i }}][url]"
                                    value="{{ is_array($img) ? $img['url'] : $img->url }}"
                                    class="w-full rounded-xl bg-white border border-gray-300 py-2 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                                    placeholder="Dán URL ảnh vào đây hoặc chọn ảnh"
                                    maxlength="255"
                                    onchange="previewImage(this, 'preview-{{ $i }}')">
                                <input type="file" accept="image/*" style="display:none"
                                    onchange="uploadAndSetUrl(this, {{ $i }})">
                            </div>
                            <div class="flex items-center gap-2 mt-2 md:mt-0">
                                <label class="flex items-center gap-1 cursor-pointer">
                                    <input type="checkbox" name="images[{{ $i }}][is_cover]" value="1"
                                        @if ((is_array($img) && !empty($img['is_cover'])) || (!is_array($img) && $img->is_cover)) checked @endif class="accent-brand-600">
                                    <span class="text-xs">Đại diện</span>
                                </label>
                                <input name="images[{{ $i }}][sort_order]"
                                    value="{{ is_array($img) ? $img['sort_order'] : $img->sort_order }}"
                                    class="w-16 rounded-xl bg-white border border-gray-300 py-2 px-2 outline-none focus:ring-2 focus:ring-brand-400 text-center"
                                    placeholder="Thứ tự">
                                <button type="button"
                                    class="bg-red-100 border border-red-200 text-red-500 hover:text-red-700 text-xs font-bold px-2 py-1 rounded transition"
                                    onclick="this.closest('.flex').remove()">
                                    Xóa
                                </button>
                            </div>
                            <div class="ml-2">
                                <img id="preview-{{ $i }}"
                                    src="{{ is_array($img) ? $img['url'] : $img->url }}" alt="Preview"
                                    class="w-16 h-16 object-cover rounded border border-gray-200 shadow-sm @if (!(is_array($img) ? $img['url'] ?? null : $img->url ?? null)) hidden @endif">
                            </div>
                        </div>
                        @if ($errors->has("images.$i.url"))
                            <div class="text-red-500 text-sm mt-1">{{ $errors->first("images.$i.url") }}</div>
                        @endif
                    @endforeach
                </div>
                <button type="button"
                    class="rounded-xl bg-brand-600 text-white px-4 py-1 mt-3 text-xs font-semibold hover:bg-brand-700 transition"
                    onclick="addImageInput()">+ Thêm ảnh</button>
                <div class="text-xs text-gray-500 mt-1">Bạn có thể dán URL ảnh, chọn file từ máy, chọn ảnh đại diện, sắp
                    xếp thứ tự. Nhấn "Thêm ảnh" để thêm dòng mới.</div>
            </div>
            <script>
                function openFileDialog(btn, idx) {
                    btn.nextElementSibling.click();
                }

                function uploadAndSetUrl(input, idx) {
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            // Giả lập upload, chỉ lấy base64 preview
                            document.querySelector(`input[name="images[${idx}][url]"]`).value = e.target.result;
                            previewImage(document.querySelector(`input[name="images[${idx}][url]"]`), `preview-${idx}`);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function previewImage(input, imgId) {
                    const url = input.value;
                    const img = document.getElementById(imgId);
                    if (url) {
                        img.src = url;
                        img.classList.remove('hidden');
                    } else {
                        img.classList.add('hidden');
                    }
                }
            </script>
            <div class="flex justify-end">
                <button
                    class="rounded-xl bg-brand-600 text-white px-8 py-2 font-semibold hover:bg-brand-700 transition text-xs md:text-md">Cập
                    nhật</button>
            </div>
        </form>
    </div>
    <script>
        let imageIndex = {{ is_array(old('images')) ? count(old('images')) : count($listing->images) }};

        function addImageInput() {
            let html = `<div class="flex gap-2 mb-2">
        <input name="images[${imageIndex}][url]" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" placeholder="Image URL">
        <label class="flex items-center gap-1">
            <input type="checkbox" name="images[${imageIndex}][is_cover]" value="1">
            <span class="text-xs">Đại diện</span>
        </label>
        <input name="images[${imageIndex}][sort_order]" class="w-20 rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" placeholder="Thứ tự">
    </div>`;
            document.getElementById('images-list').insertAdjacentHTML('beforeend', html);
            imageIndex++;
        }
    </script>
@endsection
