<?php

namespace Database\Seeders;

use App\Models\Sizegiay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizegiaySeeder extends Seeder
{
    public function run()
    {
        Sizegiay::create(['size_name' => '36', 'size_ton' => '10']);
        Sizegiay::create(['size_name' => '36.5', 'size_ton' => '20']);
        Sizegiay::create(['size_name' => '37', 'size_ton' => '15']);
        Sizegiay::create(['size_name' => '37.5', 'size_ton' => '10']);
        Sizegiay::create(['size_name' => '38', 'size_ton' => '20']);
        Sizegiay::create(['size_name' => '38.5', 'size_ton' => '15']);
        Sizegiay::create(['size_name' => '39', 'size_ton' => '10']);
        Sizegiay::create(['size_name' => '40', 'size_ton' => '20']);
        Sizegiay::create(['size_name' => '41', 'size_ton' => '15']);
        Sizegiay::create(['size_name' => '41.5', 'size_ton' => '10']);
        Sizegiay::create(['size_name' => '42', 'size_ton' => '20']);
        Sizegiay::create(['size_name' => '43', 'size_ton' => '15']);
        Sizegiay::create(['size_name' => '44', 'size_ton' => '60']);
        Sizegiay::create(['size_name' => '45', 'size_ton' => '50']);
    }
}
