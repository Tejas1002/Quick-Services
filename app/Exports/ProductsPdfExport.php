<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductsPdfExport
{
    public function view(): View
    {
        $products = Product::all();
        return view('admin.products.export-pdf', compact('products'));
    }

    public function download()
    {
        $pdf = Pdf::loadView('admin.products.export-pdf', ['products' => Product::all()]);
        return $pdf->download('products.pdf');
    }
}
