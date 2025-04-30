<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = MainService::paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|url',
            'coming_soon' => 'boolean',
        ]);

        MainService::create($request->all());

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit(MainService $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, MainService $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|url',
            'coming_soon' => 'boolean',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(MainService $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
