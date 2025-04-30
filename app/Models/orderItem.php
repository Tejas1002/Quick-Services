<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'name',
        'description',
        'price',
        'quantity',
        'service_charge',
        'gst',
        'delivery'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
