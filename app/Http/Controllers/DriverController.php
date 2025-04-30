<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DriverController extends Controller
{
    public function index()
    {
        // Fetch the Driver category (assuming it exists in the database)
        $category = Category::where('name', 'Driving')->first();

        // If the category doesn't exist yet, hardcode the name for now
        if (!$category) {
            $category = new \stdClass();
            $category->name = 'Driving';
        }

        // Return the coming soon view
        return view('pages.driver', compact('category'));
    }
}
