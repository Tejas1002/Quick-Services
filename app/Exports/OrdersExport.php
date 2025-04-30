<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Order::all();
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Email', 'Total Amount', 'Payment Method', 'Status', 'Created At', 'Updated At'];
    }
}
