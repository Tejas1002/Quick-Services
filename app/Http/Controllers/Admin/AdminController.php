<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\MainService;
use App\Models\Order;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalServices = MainService::count();
        $totalOrders = Order::count();
        $totalMessages = ContactMessage::count();
        $revenue = Order::sum('total_amount');

        // Monthly revenue for chart
        $monthlyRevenue = Order::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
            DB::raw('SUM(total_amount) as total')
        )
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $months = $monthlyRevenue->pluck('month');
        $revenues = $monthlyRevenue->pluck('total');

        return view('admin.dashboard', compact('totalUsers', 'totalProducts', 'totalServices', 'totalOrders', 'totalMessages', 'revenue', 'months', 'revenues'));
    }
}
