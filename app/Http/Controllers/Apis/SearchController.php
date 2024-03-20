<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $results = Product::where('Ten_SP', 'like', "%$query%")
            ->orWhereHas('categories', function ($query) use ($query) {
                $query->where('Name_Catogory', 'like', "%$query%");
            })
            ->get();

        return response()->json($results);
    }
}