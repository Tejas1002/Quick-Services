<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class GardenerController extends Controller
{
    public function index()
    {
        // Fetch the Gardener category (assuming it exists in the database)
        $category = Category::where('name', 'Gardening')->first();

        // If the category doesn't exist yet, hardcode the name for now
        if (!$category) {
            $category = new \stdClass();
            $category->name = 'Gardening';
        }

        // Return the coming soon view
        return view('pages.gardener', compact('category'));
    }
}
