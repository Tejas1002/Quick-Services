<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(10); // Pagination for 10 items per page
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        // Fetch all categories to display in the dropdown
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|url',
            'category_id' => 'required|exists:categories,id', // Validate category_id
            'service_charge_percentage' => 'required|numeric',
            'gst_percentage' => 'required|numeric',
            'delivery_fee' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        // Fetch categories for the edit form as well
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|url',
            'category_id' => 'required|exists:categories,id', // Validate category_id
            'service_charge_percentage' => 'required|numeric',
            'gst_percentage' => 'required|numeric',
            'delivery_fee' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function export(Request $request)
    {
        $type = $request->query('type', 'all'); // Default to 'all' if no type is specified

        if ($type === 'current') {
            // Export only the current page data
            $products = Product::paginate(10);
            $fileName = 'products_current_page.csv';
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => "attachment; filename=\"$fileName\"",
            ];

            $callback = function () use ($products) {
                $file = fopen('php://output', 'w');
                fputcsv($file, ['ID', 'Name', 'Description', 'Price', 'Category ID', 'Created At', 'Updated At']); // Added Category ID
                foreach ($products->items() as $product) {
                    fputcsv($file, [
                        $product->id,
                        $product->name,
                        $product->description,
                        $product->price,
                        $product->category_id, // Include category_id in export
                        $product->created_at,
                        $product->updated_at,
                    ]);
                }
                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        }

        // Export all data
        $fileName = 'products_all.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ];

        $products = Product::all();

        $callback = function () use ($products) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['ID', 'Name', 'Description', 'Price', 'Category ID', 'Created At', 'Updated At']); // Added Category ID
            foreach ($products as $product) {
                fputcsv($file, [
                    $product->id,
                    $product->name,
                    $product->description,
                    $product->price,
                    $product->category_id, // Include category_id in export
                    $product->created_at,
                    $product->updated_at,
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
