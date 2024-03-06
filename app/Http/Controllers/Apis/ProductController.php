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

    /**
     * Hiển thị thông tin của một sản phẩm cụ thể.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Tạo sản phẩm mới.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->ID_Category = $request->input('ID_Category');
        $product->ID_Brand = $request->input('ID_Brand');
        $product->Ten_SP = $request->input('Ten_SP');
        $product->Gia_SP = $request->input('Gia_SP');
        $product->Anh_SP1 = $request->input('Anh_SP1');
        $product->Anh_SP2 = $request->input('Anh_SP2');
        $product->save();
        return response()->json($product, 201);
    }

    /**
     * Cập nhật thông tin của một sản phẩm.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->ID_Category = $request->input('ID_Category');
        $product->ID_Brand = $request->input('ID_Brand');
        $product->Ten_SP = $request->input('Ten_SP');
        $product->Gia_SP = $request->input('Gia_SP');
        $product->Anh_SP1 = $request->input('Anh_SP1');
        $product->Anh_SP2 = $request->input('Anh_SP2');
        $product->save();
        return response()->json($product);
    }

    /**
     * Xóa một sản phẩm.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
