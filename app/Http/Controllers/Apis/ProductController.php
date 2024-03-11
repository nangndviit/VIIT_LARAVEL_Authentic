<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function updateBtid(Request $request, $id)
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

    public function deleteBtid($id)
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
}
