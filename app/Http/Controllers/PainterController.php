<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PainterController extends Controller
{
    public function index()
    {
        // Fetch the Painter category (assuming it exists in the database)
        $category = Category::where('name', 'Painting')->first();

        // If the category doesn't exist yet, you can hardcode the name for now
        if (!$category) {
            $category = new \stdClass();
            $category->name = 'Painting';
        }

        // Return the coming soon view
        return view('pages.painter', compact('category'));
    }
}
