<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Hiển thị danh sách các brand.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    /**
     * Lưu một brand mới vào cơ sở dữ liệu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $brands = new Brand();

        $brands->Name_Brand = $request->Name_Brand;
        $brands->Anh_Brand = $request->Anh_Brand;

        $data = $brands->save();
        if ($data) {
            return response()->json([
                $brands
            ]);
        } else {
            return response()->json([
                $brands
            ]);
        }
    }


    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $validatedData = $request->validate([
            'Name_Brand' => 'required|string|max:255',
            'Anh_Brand' => 'required|string|max:255',
        ]);

        $brand->update($validatedData);

        return response()->json([
            'status' => 200,
            'message' => 'Brand updated successfully',
            'data' => $brand
        ]);
    }

    public function delete($id)
    {
        $brans = Brand::findOrFail($id);
        if ($brans->delete()) {
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

    public function takePounds($id)
    {
        $brand = Brand::with('products.sizes')->find($id);
        if (!$brand) {
            return response()->json(['message' => 'Không tìm thấy thương hiệu'], 404);
        }

        return response()->json([
            'data' => $brand
        ]);
    }

    

    public function search(Request $request)
    {
        $searchQuery = $request->input('key');
        $brands = Brand::where('Name_Brand', 'like', '%' . $searchQuery . '%')->get();

        if ($brands->isEmpty()) {
            return response()->json(['message' => 'Không tìm thấy kết quả tìm kiếm.'], 404);
        }

        $products = [];

        foreach ($brands as $brand) {
            $products[] = $brand->products()->get();
        }

        $mergedProducts = collect($products)->flatten();

        return response()->json($mergedProducts);
    }

}
