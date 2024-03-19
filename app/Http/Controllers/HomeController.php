<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Events;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {

        $products = Product::with('category')->get();
        $brands = Brand::all();
        $events = Events::all();

        return view("home", [
            'products' => $products,
            'brands' => $brands,
            'events' => $events
        ]);
    }
}