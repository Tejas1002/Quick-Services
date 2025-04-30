<?php

// app/Models/MainService.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainService extends Model {
    use HasFactory;

    protected $fillable = [
        'name', // Service name
        'description', // Service description
        'image', // Service image URL
    ];
}
