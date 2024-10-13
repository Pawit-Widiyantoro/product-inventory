<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = $request->input('size', 10);
        $products = Product::with('category')->paginate($pageSize);
        return response()->json([
            'data' => $products->items(),
            'paging' => [
                'current_page' => $products->currentPage(),
                'total_pages' => $products->lastItem(),
                'page_size' => $products->perPage(),
                'total_items' => $products->total(),
            ]
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create($request->all());

        return response()->json([
            'data' => $product
        ], 201);
    }

    public function show(Product $product)
    {
        $productWithCategory = $product->load('category');
        return response()->json([
            'data' => $productWithCategory
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return response()->json([
            'data' => $product
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}

