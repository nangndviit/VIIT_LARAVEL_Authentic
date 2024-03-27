<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sizegiay;

class SizegiayController extends Controller
{
    public function index()
    {
        $sizes = Sizegiay::all();
        foreach($sizes as $key => $size) {
            $products = $size->products->count();
            $sizes['products'] = $products;
        }
        return response()->json($sizes);
    }
    
}