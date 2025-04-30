<?php

// app/Http/Controllers/Api/ServiceController.php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\MainService;

class ServiceController extends Controller
{
    public function index()
    {
        return response()->json(['data' => MainService::all()]);
    }

    public function show($id)
    {
        return response()->json(['data' => MainService::findOrFail($id)]);
    }
}
