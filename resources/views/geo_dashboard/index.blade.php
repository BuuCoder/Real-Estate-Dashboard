@extends('dashboard.layout')

@section('title', 'Danh sách Địa Lý')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-xl md:text-2xl font-extrabold mb-6">Quản lý vị trí địa lý</h1>

    <div class="mb-8">
        <label for="province" class="block mb-2 font-semibold">Chọn tỉnh/thành phố:</label>
        <select id="province" class="w-full border border-gray-300 rounded-xl px-3 py-2 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition" onchange="fetchWards()">
            <option value="">-- Chọn tỉnh/thành phố --</option>
            @foreach($provinces as $province)
                <option value="{{ $province->code }}">{{ $province->full_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="bg-white rounded-3xl shadow-panel overflow-x-auto">
        <h2 class="text-xl font-semibold mb-4 px-6 pt-6">Danh sách xã/phường</h2>
        <table class="min-w-full text-xs md:text-sm">
            <thead>
                <tr class="text-left text-gray-500 font-semibold border-b">
                    <th class="px-6 py-4">Mã</th>
                    <th class="px-6 py-4">Tên</th>
                    <th class="px-6 py-4">Đơn vị hành chính</th>
                </tr>
            </thead>
            <tbody id="wards-table" class="divide-y">
                <tr>
                    <td colspan="3" class="text-center py-4 text-gray-500">Vui lòng chọn tỉnh/thành phố để xem xã/phường.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
function fetchWards() {
    const provinceCode = document.getElementById('province').value;
    const tbody = document.getElementById('wards-table');
    if (!provinceCode) {
        tbody.innerHTML = `<tr>
            <td colspan="3" class="text-center py-4 text-gray-500">Vui lòng chọn tỉnh/thành phố để xem xã/phường.</td>
        </tr>`;
        return;
    }
    fetch(`/geo/wards/${provinceCode}`)
        .then(res => res.json())
        .then(data => {
            if (data.length === 0) {
                tbody.innerHTML = `<tr>
                    <td colspan="3" class="text-center py-4 text-gray-500">Không có xã/phường nào.</td>
                </tr>`;
            } else {
                tbody.innerHTML = data.map(ward => `
                    <tr class="hover:bg-gray-50 transition">
                        <td class="border-0 px-6 py-4 font-bold">${ward.code}</td>
                        <td class="border-0 px-6 py-4">${ward.name}</td>
                        <td class="border-0 px-6 py-4">
                            ${ward.administrative_unit ? ward.administrative_unit.full_name : ''}
                        </td>
                    </tr>
                `).join('');
            }
        })
        .catch(() => {
            tbody.innerHTML = `<tr>
                <td colspan="3" class="text-center py-4 text-red-500">Đã xảy ra lỗi khi tải dữ liệu.</td>
            </tr>`;
        });
}
</script>
@endsection