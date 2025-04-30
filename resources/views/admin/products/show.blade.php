@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product Details</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4>{{ $product->name }}</h4>
            <p><strong>Price:</strong> ₹{{ number_format($product->price, 2) }}</p>
            <p><strong>Description:</strong> {{ $product->description ?? 'N/A' }}</p>
            <p><strong>Service Charge (%):</strong> {{ $product->service_charge_percentage }}%</p>
            <p><strong>GST (%):</strong> {{ $product->gst_percentage }}%</p>
            <p><strong>Delivery Fee:</strong> ₹{{ number_format($product->delivery_fee, 2) }}</p>
            <p><strong>Created At:</strong> {{ $product->created_at->format('d M Y') }}</p>
            <p><strong>Updated At:</strong> {{ $product->updated_at->format('d M Y') }}</p>
        </div>
    </div>
</div>
@endsection
