<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['Name_Catogory' => 'Giày Nike', 'slug' => Str::slug('Giày Nike'), 'title' => 'Giày chính hãng Nike 2023', 'description' => 'Mẫu giày Nike Jordan 1, Air Force 1, các sản phẩm bóng rổ,… mới nhất 2023 với giá cực tốt'],
            ['Name_Catogory' => 'Giày Sneaker', 'slug' => Str::slug('Giày Sneaker'), 'title' => 'Giày Sneaker mới nhất', 'description' => 'Các mẫu giày Sneaker thời trang'],
            ['Name_Catogory' => 'Giày Adidas', 'slug' => Str::slug('Giày Adidas'), 'title' => 'Giày Adidas chính hãng', 'description' => 'Đa dạng mẫu giày Adidas'],
            ['Name_Catogory' => 'Phụ Kiện', 'slug' => Str::slug('Phụ Kiện'), 'title' => 'Phụ kiện thời trang', 'description' => 'Các sản phẩm phụ kiện thời trang'],
            ['Name_Catogory' => 'Quần Áo', 'slug' => Str::slug('Quần Áo'), 'title' => 'Áo The North Face', 'description' => 'Mua sắm các sản phẩm Collab của TNF với các thương hiệu hàng đầu thế giới như Gucci, Supreme,…'],
        ]);
    }
}