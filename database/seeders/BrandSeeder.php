<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['Name_Brand' => 'Adidas', 'Anh_Brand' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/IE0586.webp'],
            ['Name_Brand' => 'Nike', 'Anh_Brand' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Nike-Air-Force-1-Low-Travis-Scott-Cactus-Jack.png'],
            ['Name_Brand' => 'Yeezy Slide', 'Anh_Brand' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/De%CC%81p-Yeezy-Slide-chi%CC%81nh-ha%CC%83ng.png'],
            ['Name_Brand' => 'New Balance', 'Anh_Brand' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/Giay-New-Balance-530-Retro-Runni-removebg-preview.png'],
            ['Name_Brand' => 'Jordan 1', 'Anh_Brand' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/Giay-Nike-Air-Jordan-1-Low-OG-Ye-removebg-preview.png'],
        ]);
    }
}
