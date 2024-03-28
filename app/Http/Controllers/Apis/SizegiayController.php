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

    public function show_all()
    {
        $sizes = Sizegiay::all();
        return response()->json($sizes);
    }

    public function show_number()
    {
        $sizes = Sizegiay::whereRaw('size_name REGEXP "^[0-9.]+$"')->with('products')->get();        
        return response()->json($sizes);
    }

    public function show_letter()
    {
        $sizes = Sizegiay::whereRaw('size_name REGEXP "^[A-Za-z]+$"')->with('products')->get();
    
        return response()->json($sizes);
    }

    public function show_ml()
    {
        $sizes = Sizegiay::where('size_name', 'LIKE', '%ml')->with('products')->get();
        
        return response()->json($sizes);
    }

    public function show_one($id)
    {
        // Tìm size giày dựa trên ID được truyền vào và kèm theo thông tin về sản phẩm và kích thước
        $size = Sizegiay::with('products')->find($id);

        // Kiểm tra xem size có tồn tại không
        if (!$size) {
            return response()->json(['message' => 'Không tìm thấy size giày'], 404);
        }

        return response()->json([
            'data' => $size
        ]);
    }


}