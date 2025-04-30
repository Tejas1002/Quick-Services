<?php

namespace App\Http\Controllers;

use App\Models\MainService;
use Illuminate\Http\Request;
use App\Events\ChatMessageSent;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $services = MainService::all();

        // Get 3 random reviews
        $reviews = Feedback::inRandomOrder()
                    ->take(3)
                    ->get();

        // OR get latest 5 reviews (choose one approach)
        // $reviews = Feedback::latest()
        //             ->take(5)
        //             ->get();

        return view('pages.home', compact('services', 'reviews'));
    }

    public function carpenter()
    {
        return view('carpenter');
    }

    public function cart()
    {
        return view('cart');
    }
}
