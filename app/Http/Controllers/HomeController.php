<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Events;
use App\Models\Product;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $products = Product::with('category')->get();
        $brands = Brand::all();
        $events = Events::all();

        return view("pages.product.all_product", [
            'products' => $products,
            'brands' => $brands,
            'events' => $events
        ]);
    }
}
