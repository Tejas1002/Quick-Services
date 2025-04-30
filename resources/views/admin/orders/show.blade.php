@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Order #{{ $order->id }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Order Details</h5>
            <p><strong>Name:</strong> {{ $order->name }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>
            <p><strong>Address:</strong> {{ $order->address }}</p>
            <p><strong>Phone:</strong> {{ $order->phone }}</p>
            <p><strong>City:</strong> {{ $order->city }}</p>
            <p><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>
            <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>

            <h5>Update Status</h5>
            <form action="{{ route('orders.update', $order) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Status</button>
            </form>

            <h5 class="mt-4">Order Items</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Order ID</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Service Charge (%)</th>
                        <th>GST (%)</th>
                        <th>Delivery Fee</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->orderItems as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->order_id }}</td>
                            <td>{{ $item->product_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>₹{{ number_format($item->price, 2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->service_charge }}</td>
                            <td>{{ $item->gst }}</td>
                            <td>₹{{ number_format($item->delivery, 2) }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
