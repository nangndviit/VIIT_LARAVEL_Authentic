<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    //
    public function getAll()
    {
        return response()->json([
            'data' => Category::all()
        ]);
    }
    public function findID()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            $category->setRelation('products', Product::where('ID_Category', $category->ID_Category)->limit(8)->get());
        }

        return response()->json([
            'data' => $categories,
        ]);
    }

    public function create(Request $req)
    {
        $categories = new Category();

        $categories->Name_Catogory = $req->Name_Catogory;
        $categories->title = $req->title;
        $categories->description = $req->description;

        $data = $categories->save();
        if ($data) {
            return response()->json([
                $categories
            ]);
        } else {
            return response()->json([
                $categories
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate([
            'Name_Catogory' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category->update($validatedData);

        return response()->json([
            'status' => 200,
            'message' => 'Category updated successfully',
            'data' => $category
        ]);
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);

        if ($category->delete()) {
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
    public function search(Request $request)
    {
        $searchQuery = $request->input('key');
        $categories = Category::where('Name_Catogory', 'like', '%' . $searchQuery . '%')->get();
    
        if ($categories->isEmpty()) {
            return response()->json(['message' => 'Không tìm thấy kết quả tìm kiếm.'], 404);
        }
    
        $products = [];
    
        foreach ($categories as $category) {
            $products[] = $category->products()->get();
        }
    
        $mergedProducts = collect($products)->flatten();
    
        return response()->json($mergedProducts);
    }        
}
