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
                // 'error' => 400,
                // 'message' => 'something'
                $brands
            ]);
        } else {
            return response()->json([
                // 'status' => 200,
                // 'message' => 'data success saved'
                $brands
            ]);
        }
    }


    public function updateBtid(Request $request, $id)
    {
        $brand = Brand::findOrFail($id); // Sử dụng Brand thay vì $brands

        $validatedData = $request->validate([
            'Name_Brand' => 'required|string|max:255',
            'Anh_Brand' => 'required|string|max:255',
        ]);

        $brand->update($validatedData); // Sử dụng $brand thay vì $brands

        return response()->json([
            'status' => 200,
            'message' => 'Brand updated successfully',
            'data' => $brand // Sử dụng $brand thay vì $brands
        ]);
    }
    public function deleteBtid($id)
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
}
