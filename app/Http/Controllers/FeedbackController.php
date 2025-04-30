<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function submit(Request $request, Order $order)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'name' => 'nullable|string|max:255', // Optional name
            'comment' => 'required|string|max:500',
        ]);

        Feedback::create([
            'order_id' => $order->id,
            'rating' => $request->rating,
            'name' => $request->name ?? null, // Don't try to use user's name
            'comment' => $request->comment,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
