<?php

// app/Http/Controllers/Api/ProductController.php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Product::with('service')->get()]);
    }

    public function show($id)
    {
        return response()->json(['data' => Product::with('service')->findOrFail($id)]);
    }

    public function filter(Request $request)
    {
        $query = Product::query();
        if ($request->has('service_id')) {
            $query->where('service_id', $request->service_id);
        }
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereBetween('price', [$request->price_min, $request->price_max]);
        }
        return response()->json(['data' => $query->with('service')->get()]);
    }

}
