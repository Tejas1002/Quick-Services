<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserActivityNotification;
use Illuminate\Support\Facades\Mail; // Correct namespace for Mail facade
use PDF;

class OrderController extends Controller
{
    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        return view('pages.order', compact('user'));
    }

    public function store(Request $request)
    {
        \Log::info('Order Store Request:', $request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'payment_method' => 'required|in:cod,card,upi',
            'cart_data' => 'required',
            'total_amount' => 'required|numeric'
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'city' => $validated['city'],
            'payment_method' => $validated['payment_method'],
            'total_amount' => $validated['total_amount'],
            'status' => 'pending'
        ]);

        $cartItems = json_decode($validated['cart_data'], true);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'image' => $item['image'] ?? null,
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'service_charge' => $item['service_charge'],
                'gst' => $item['gst'],
                'delivery' => $item['delivery']
            ]);
        }

        session(['cart_total' => $validated['total_amount']]);

        // Send email notification to your personal email
        $yourEmail = env('ADMIN_EMAIL', 'shahtejas3333@gmail.com');
        $details = [
            'order_id' => $order->id,
            'total_amount' => $order->total_amount,
            'payment_method' => $order->payment_method,
            'cart_items' => $cartItems
        ];
        Mail::to($yourEmail)->send(new UserActivityNotification(Auth::user(), 'Order Placed', $details));

        return redirect()->route('order.thank-you', $order);
    }
    public function thankYou(Order $order)
    {
        return view('pages.thank-you', compact('order'));
    }



public function downloadReceipt(Order $order)
{
    $data = [
        'order' => $order,
        'title' => 'Receipt - Order #' . $order->id,
    ];

    $pdf = PDF::loadView('pdf.receipt', $data);

    return $pdf->download('receipt_order_' . $order->id . '.pdf');
}

public function orderHistory(Request $request)
{
    $user = Auth::user();
    if (!$user) {
        return redirect()->route('login')->with('error', 'You must be logged in to view your order history.');
    }

    $orders = $user->orders()->with('items')->paginate(10); // Fetch orders with related items
    $totalOrdersAmount = $user->orders()->sum('total_amount'); // Calculate total amount of all orders

    return view('pages.order-history', compact('orders', 'user', 'totalOrdersAmount'));
}

public function downloadOrderHistoryCsv()
{
    $user = Auth::user();
    $orders = $user->orders()->with('items')->get();

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="order_history_' . $user->id . '.csv"',
    ];

    $callback = function () use ($orders) {
        $file = fopen('php://output', 'w');

        // CSV Header
        fputcsv($file, [
            'Order ID',
            'Total Amount',
            'Payment Method',
            'Status',
            'Product Name',
            'Description',
            'Price',
            'Quantity',
            'Service Charge',
            'GST',
            'Delivery Fee'
        ]);

        // CSV Data
        foreach ($orders as $order) {
            if ($order->items->isEmpty()) {
                fputcsv($file, [
                    $order->id,
                    $order->total_amount,
                    ucfirst($order->payment_method),
                    ucfirst($order->status),
                    '', '', '', '', '', '', ''
                ]);
            } else {
                foreach ($order->items as $item) {
                    fputcsv($file, [
                        $order->id,
                        $order->total_amount,
                        ucfirst($order->payment_method),
                        ucfirst($order->status),
                        $item->name,
                        $item->description,
                        $item->price,
                        $item->quantity,
                        $item->service_charge,
                        $item->gst,
                        $item->delivery
                    ]);
                }
            }
        }

        fclose($file);
    };

    return response()->streamDownload($callback, 'order_history_' . $user->id . '.csv', $headers);
}
}
