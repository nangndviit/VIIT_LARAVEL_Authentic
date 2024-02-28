<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['Name_Catogory' => 'Giày Nike'],
            ['Name_Catogory' => 'Giày Sneaker'],
            ['Name_Catogory' => 'Giày Adidas'],
            ['Name_Catogory' => 'Phụ Kiện'],
        ]);
    }
}
