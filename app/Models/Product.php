<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id', // Changed to category_id
        'service_charge_percentage',
        'gst_percentage',
        'delivery_fee',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function likes()
{
    return $this->hasMany(Like::class);
}
}
