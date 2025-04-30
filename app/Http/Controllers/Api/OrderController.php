<?php
// app/Http/Controllers/Api/OrderController.php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['data' => Order::where('user_id', $request->user()->id)->with('items')->get()]);
    }

    public function show($id, Request $request)
    {
        return response()->json(['data' => Order::where('user_id', $request->user()->id)->with('items')->findOrFail($id)]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'payment_method' => 'required|in:cod,card,upi',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();
        try {
            $order = Order::create([
                'user_id' => $request->user()->id,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'city' => $request->city,
                'payment_method' => $request->payment_method,
                'total_amount' => 0,
            ]);

            $total = 0;
            foreach ($request->items as $item) {
                $product = Product::findOrFail($item['product_id']);
                $subtotal = $product->price * $item['quantity'];
                $total += $subtotal + $product->service_charge_percentage + $product->gst_percentage + $product->delivery_fee;

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'quantity' => $item['quantity'],
                    'service_charge' => $product->service_charge_percentage,
                    'gst' => $product->gst_percentage,
                    'delivery' => $product->delivery_fee,
                ]);
            }

            $order->update(['total_amount' => $total]);
            DB::commit();
            return response()->json(['data' => $order->load('items')], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
