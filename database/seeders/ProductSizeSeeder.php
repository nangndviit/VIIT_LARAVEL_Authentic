<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Sizegiay;

class ProductSizeSeeder extends Seeder
{
    public function run()
    {
        $products = Product::all();
        $sizes = Sizegiay::all();

        $products->each(function ($product) use ($sizes) {
            $randomSizes = $sizes->random(rand(1, $sizes->count()));

            $product->sizes()->attach($randomSizes->pluck('id'));
        });
    }
}
