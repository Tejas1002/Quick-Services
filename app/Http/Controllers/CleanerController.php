<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CleanerController extends Controller
{
    public function index()
    {
        // Fetch the Cleaner category (assuming it exists in the database)
        $category = Category::where('name', 'Cleaning')->first();

        // If the category doesn't exist yet, hardcode the name for now
        if (!$category) {
            $category = new \stdClass();
            $category->name = 'Cleaning';
        }

        // Return the coming soon view
        return view('pages.cleaner', compact('category'));
    }
}
