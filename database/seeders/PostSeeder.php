<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Post types
        DB::table('post_types')->insert([
            ['code' => 'guide', 'name' => 'Hướng dẫn mua bán'],
            ['code' => 'market', 'name' => 'Phân tích thị trường'],
            ['code' => 'legal', 'name' => 'Pháp lý nhà đất'],
            ['code' => 'news', 'name' => 'Tin tức bất động sản'],
            ['code' => 'project', 'name' => 'Giới thiệu dự án'],
            ['code' => 'finance', 'name' => 'Tài chính & vay mua nhà'],
            ['code' => 'investment', 'name' => 'Kinh nghiệm đầu tư'],
            ['code' => 'howto', 'name' => 'Mẹo & thủ thuật'],
        ]);

        // Tags
        DB::table('tags')->insert([
            ['code' => 'quy-hoach', 'name' => 'Quy hoạch'],
            ['code' => 'phap-ly', 'name' => 'Pháp lý'],
            ['code' => 'so-do', 'name' => 'Sổ đỏ'],
            ['code' => 'so-hong', 'name' => 'Sổ hồng'],
            ['code' => 'gia-nha', 'name' => 'Giá nhà'],
            ['code' => 'gia-dat', 'name' => 'Giá đất'],
            ['code' => 'thi-truong', 'name' => 'Thị trường bất động sản'],
            ['code' => 'dinh-gia', 'name' => 'Định giá'],
            ['code' => 'vay-mua-nha', 'name' => 'Vay mua nhà'],
            ['code' => 'lai-suat', 'name' => 'Lãi suất'],
            ['code' => 'tai-chinh', 'name' => 'Tài chính cá nhân'],
            ['code' => 'nha-o', 'name' => 'Nhà ở'],
            ['code' => 'can-ho', 'name' => 'Căn hộ'],
            ['code' => 'dat-nen', 'name' => 'Đất nền'],
            ['code' => 'biet-thu', 'name' => 'Biệt thự'],
            ['code' => 'shophouse', 'name' => 'Shophouse'],
            ['code' => 'tphcm', 'name' => 'TP. Hồ Chí Minh'],
            ['code' => 'ha-noi', 'name' => 'Hà Nội'],
            ['code' => 'binh-duong', 'name' => 'Bình Dương'],
            ['code' => 'dong-nai', 'name' => 'Đồng Nai'],
            ['code' => 'da-nang', 'name' => 'Đà Nẵng'],
        ]);
    }
}
