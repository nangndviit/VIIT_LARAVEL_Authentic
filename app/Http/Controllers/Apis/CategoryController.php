<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use PhpParser\Node\Expr\New_;

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
            $category->setRelation('products', Product::where('ID_Category', $category->ID_Category)->limit(6)->get());
        }

        return response()->json([
            'data' => $categories,
        ]);

        // $data = [];
        // $categories = Category::all();
        // $products = Product::all();

        // // dd($categories);
        // foreach ($categories as $category) {
        //     $category['products'] = Product::where('ID_Category', $category->ID_Category)->limit(6)->get();
        //     $data[] = $category;
        // }

        // return response()->json([
        //     'data' => $data,
        // ]);
    }

    // public function index(Request $req)
    // {
    //     $categories = new Category();

    //     $categories->Name_Catogory = $req->Name_Catogory;
    //     $categories->title = $req->title;
    //     $categories->description = $req->description;

    //     $data = $categories->save();
    //     if ($data) {
    //         return response()->json([
    //             // 'error' => 400,
    //             // 'message' => 'something'
    //             $categories
    //         ]);
    //     } else {
    //         return response()->json([
    //             // 'status' => 200,
    //             // 'message' => 'data success saved'
    //             $categories
    //         ]);
    //     }
    // }
    public function create(Request $req)
    {
        $categories = new Category();

        $categories->Name_Catogory = $req->Name_Catogory;
        $categories->title = $req->title;
        $categories->description = $req->description;

        $data = $categories->save();
        if ($data) {
            return response()->json([
                // 'error' => 400,
                // 'message' => 'something'
                $categories
            ]);
        } else {
            return response()->json([
                // 'status' => 200,
                // 'message' => 'data success saved'
                $categories
            ]);
        }
    }

    public function updatebtid(Request $request, $id)
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

    public function deletebtid($id)
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
    /**
     * Xóa category khỏi cơ sở dữ liệu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }
}
