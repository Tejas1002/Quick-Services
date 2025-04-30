<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Eager load the orderItems relationship
        $orders = Order::with('orderItems')->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load('orderItems');
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,shipped,delivered',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order status updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }

    public function export(Request $request)
    {
        $type = $request->query('type', 'all'); // Default to 'all' if no type is specified

        if ($type === 'current') {
            // Export only the current page data
            $orders = Order::with('orderItems')->paginate(10);
            $fileName = 'orders_current_page.csv';
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => "attachment; filename=\"$fileName\"",
            ];

            $callback = function () use ($orders) {
                $file = fopen('php://output', 'w');
                fputcsv($file, ['ID', 'Name', 'Email', 'Total Amount', 'Payment Method', 'Status', 'Created At', 'Updated At']);
                foreach ($orders->items() as $order) {
                    fputcsv($file, [
                        $order->id,
                        $order->name,
                        $order->email,
                        $order->total_amount,
                        $order->payment_method,
                        $order->status,
                        $order->created_at,
                        $order->updated_at,
                    ]);
                }
                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        }

        // Export all data
        $fileName = 'orders_all.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ];

        $orders = Order::all();

        $callback = function () use ($orders) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['ID', 'Name', 'Email', 'Total Amount', 'Payment Method', 'Status', 'Created At', 'Updated At']);
            foreach ($orders as $order) {
                fputcsv($file, [
                    $order->id,
                    $order->name,
                    $order->email,
                    $order->total_amount,
                    $order->payment_method,
                    $order->status,
                    $order->created_at,
                    $order->updated_at,
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
