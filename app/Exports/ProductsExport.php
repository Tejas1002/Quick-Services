<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class ProductsExport implements FromCollection, WithHeadings
{
    protected $products;

    public function __construct($products = null)
    {
        $this->products = $products;
    }

    public function collection()
    {
        // If a specific collection is passed (e.g., current page), use it
        if ($this->products) {
            return new Collection($this->products);
        }

        // Otherwise, fetch all products
        return Product::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Description',
            'Price',
            'Created At',
            'Updated At',
        ];
    }
}
