<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'ID_Category' => 1,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày Nike Air Force 1 ’07 ‘White’ 315122-111',
                'Gia_SP' => 800.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/240_01.jpg_34183f6907ea4533beb58f70876f9325.jpeg',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',
                'Gia_SP' => 500.00,
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
        ]);
    }
}
