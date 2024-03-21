<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sizegiay;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        $product = new Product();

        $product->ID_Category = $request->ID_Category;
        $product->ID_Brand = $request->ID_Brand;
        $product->Ten_SP = $request->Ten_SP;
        $product->Gia_SP = $request->Gia_SP;
        $product->Anh_SP1 = $request->Anh_SP1;
        $product->Anh_SP2 = $request->Anh_SP2;

        $data = $product->save();
        if ($data) {
            return response()->json([
                $product
            ]);
        } else {
            return response()->json([
                $product
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'ID_Category' => 'required|string|max:255',
            'ID_Brand' => 'required|string|max:255',
            'Ten_SP' => 'required|string|max:255',
            'Gia_SP' => 'required|string|max:255',
            'Anh_SP1' => 'required|string|max:255',
            'Anh_SP2' => 'required|string|max:255',
        ]);

        $product->update($validatedData);

        return response()->json([
            'status' => 200,
            'message' => 'Product updated successfully',
            'data' => $product
        ]);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        if ($product->delete()) {
            return response()->json([
                'status' => 200,
                'message' => 'Đã xóa xong'
            ]);
        } else {
            return response()->json([
                'error' => 400,
                'message' => 'Chưa xóa được'
            ]);
        }
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }

    public function takePounds($id)
    {
        $product = Product::with('category', 'sizes')->find($id);
        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }

        return response()->json([
            'data' => $product
        ]);
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('key');
        $products = Product::where('name', 'like', '%' . $searchQuery . '%')
            ->orWhereHas('category', function ($categoryQuery) use ($searchQuery) {
                $categoryQuery->where('Name_Catogory', 'like', '%' . $searchQuery . '%');
            })
            ->get();

        return response()->json($products);
    }

}