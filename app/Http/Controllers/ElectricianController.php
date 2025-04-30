<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Like;
use App\Models\Wishlist;

class ElectricianController extends Controller
{
    public function index()
    {
        $category = Category::where('name', 'Electrician')->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(6);
        $totalProducts = Product::where('category_id', $category->id)->count();

        $savedItemsCount = 0;
        if (auth()->check()) {
            $user = auth()->user();
            $savedItemsCount = Wishlist::where('user_id', $user->id)->count() +
                              Like::where('user_id', $user->id)->count();
        }

        return view('pages.electrician', compact('products', 'totalProducts', 'category', 'savedItemsCount'));
    }

    public function filterProducts(Request $request)
    {
        $searchQuery = $request->input('search');
        $priceRange = $request->input('price');
        $category = Category::where('name', 'Electrician')->firstOrFail();

        $products = Product::where('category_id', $category->id)
            ->when($searchQuery, function ($query) use ($searchQuery) {
                return $query->where('name', 'like', '%' . $searchQuery . '%')
                             ->orWhere('description', 'like', '%' . $searchQuery . '%');
            })
            ->when($priceRange, function ($query) use ($priceRange) {
                return $query->where('price', '<=', $priceRange);
            })
            ->paginate(6);

        $products->appends(['search' => $searchQuery, 'price' => $priceRange]);
        $totalProducts = Product::where('category_id', $category->id)->count();

        return response()->json([
            'products' => view('partials.product-list', compact('products'))->render(),
            'first_item' => $products->firstItem(),
            'last_item' => $products->lastItem(),
            'total' => $totalProducts,
            'pagination' => $products->links('pagination::bootstrap-5')->render(),
        ]);
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function likeProduct(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $user = auth()->user();
        $productId = $request->product_id;

        $existingLike = Like::where('user_id', $user->id)
                          ->where('product_id', $productId)
                          ->first();

        if ($existingLike) {
            $existingLike->delete();
            return response()->json(['success' => true, 'message' => 'Product unliked', 'liked' => false]);
        } else {
            Like::create([
                'user_id' => $user->id,
                'product_id' => $productId
            ]);
            return response()->json(['success' => true, 'message' => 'Product liked', 'liked' => true]);
        }
    }

    public function addToWishlist(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $user = auth()->user();
        $productId = $request->product_id;

        $existingWishlist = Wishlist::where('user_id', $user->id)
                                    ->where('product_id', $productId)
                                    ->first();

        if ($existingWishlist) {
            $existingWishlist->delete();
            return response()->json(['success' => true, 'message' => 'Removed from wishlist', 'wishlisted' => false]);
        } else {
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $productId
            ]);
            return response()->json(['success' => true, 'message' => 'Added to wishlist', 'wishlisted' => true]);
        }
    }

    public function getSavedItemsCount()
    {
        $user = auth()->user();
        $count = Wishlist::where('user_id', $user->id)->count() +
                 Like::where('user_id', $user->id)->count();
        return response()->json(['count' => $count]);
    }
}
