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
        return response()->json($sizes);
    }
}
