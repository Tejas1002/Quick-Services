<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History - Carpenter Quick Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #f3f4f6 100%);
            color: #1f2937;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 3rem;
            margin-bottom: 3rem;
            max-width: 1300px;
            padding: 0 1.5rem;
        }
        h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #1e40af;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            animation: fadeIn 1s ease-in-out;
        }
        h1::after {
            content: '';
            width: 80px;
            height: 5px;
            background: linear-gradient(to right, #1e40af, #3b82f6);
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
        }
        h2, h3 {
            font-weight: 600;
            color: #1e40af;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        h2 i, h3 i {
            margin-right: 0.5rem;
            color: #3b82f6;
        }
        .overview-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
            animation: fadeIn 1s ease-in-out;
        }
        .user-details, .total-orders {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }
        .user-details p, .total-orders p {
            margin: 0.5rem 0;
            font-size: 1rem;
            color: #4b5563;
        }
        .user-details p strong, .total-orders p strong {
            color: #1f2937;
            font-weight: 500;
        }
        .total-orders p {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e40af;
        }
        .order-history-section {
            animation: fadeIn 1s ease-in-out;
        }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .order-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }
        .order-header .order-info {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        .order-header .order-info span {
            font-size: 0.95rem;
            color: #4b5563;
        }
        .order-header .order-info span strong {
            color: #1f2937;
            font-weight: 500;
        }
        .order-header .status {
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .status.pending {
            background: #fef3c7;
            color: #d97706;
        }
        .status.completed {
            background: #d1fae5;
            color: #059669;
        }
        .status.cancelled {
            background: #fee2e2;
            color: #dc2626;
        }
        .products-list {
            margin-top: 1rem;
        }
        .products-list li {
            margin-bottom: 1rem;
        }
        .products-list li strong {
            color: #1f2937;
            font-weight: 500;
        }
        .products-list li small {
            color: #6b7280;
            font-size: 0.9rem;
            display: block;
        }
        .order-actions {
            margin-top: 1rem;
            display: flex;
            gap: 1rem;
        }
        .btn-primary {
            background: linear-gradient(to right, #1e40af, #3b82f6);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            border-radius: 8px;
            color: #ffffff;
        }
        .btn-secondary {
            background: #6b7280;
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            border-radius: 8px;
            color: #ffffff;
        }
        .btn-success {
            background: linear-gradient(to right, #16a34a, #22c55e);
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            border-radius: 8px;
            color: #ffffff;
        }
        .alert {
            border-radius: 8px;
            font-size: 0.95rem;
            padding: 1rem;
            margin-bottom: 2rem;
        }
        .pagination {
            justify-content: center;
            margin-top: 3rem;
        }
        .pagination .page-link {
            border-radius: 6px;
            color: #1e40af;
            font-weight: 500;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(to right, #1e40af, #3b82f6);
            border-color: #1e40af;
            color: #ffffff;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @media (max-width: 992px) {
            .overview-section {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
            }
            .user-details, .total-orders {
                padding: 1.5rem;
            }
            .order-header .order-info {
                flex-direction: column;
                gap: 0.5rem;
            }
            .order-actions {
                flex-direction: column;
                gap: 0.5rem;
            }
            .btn-secondary, .btn-success {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Overview Section -->
        <div class="overview-section">
            <!-- User Details -->
            @if (isset($user))
                <div class="user-details">
                    <h2><i class="fas fa-user"></i> User Details</h2>
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone ?? 'Not provided' }}</p>
                    <p><strong>Address:</strong> {{ $user->address ?? 'Not provided' }}, {{ $user->city ?? '' }}</p>
                </div>
            @else
                <div class="alert alert-warning">
                    User details are not available. Please log in again.
                </div>
            @endif

            <!-- Total Orders Amount -->
            <div class="total-orders">
                <h3><i class="fas fa-wallet"></i> Total Orders Amount</h3>
                <p>₹{{ number_format($totalOrdersAmount, 2) }}</p>
            </div>
        </div>

        <!-- Order History Section -->
        <div class="order-history-section">
            <h1>Your Order History</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if ($orders->isEmpty())
                <p class="text-center text-muted">No orders found.</p>
            @else
                <div class="section-header">
                    <h2><i class="fas fa-history"></i> Orders ({{ $orders->total() }})</h2>
                    <a href="{{ route('order.history.csv') }}" class="btn btn-success"><i class="fas fa-download me-2"></i>Download CSV</a>
                </div>
                @foreach ($orders as $index => $order)
                    <div class="order-card">
                        <div class="order-header">
                            <div class="order-info">
                                <span><strong>Order ID:</strong> {{ $order->id }}</span>
                                <span><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</span>
                                <span><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</span>
                            </div>
                            <span class="status {{ strtolower($order->status) }}">{{ ucfirst($order->status) }}</span>
                        </div>
                        <div class="products-list">
                            <h3><i class="fas fa-box-open"></i> Products ({{ $order->items->count() }})</h3>
                            @if ($order->items->isEmpty())
                                <p class="text-muted mb-0">No products found for this order.</p>
                            @else
                                <ul class="list-unstyled">
                                    @foreach ($order->items as $item)
                                        <li>
                                            <strong>{{ $item->name }}</strong><br>
                                            <small>{{ $item->description }}</small><br>
                                            <small>Price: ₹{{ number_format($item->price, 2) }} | Quantity: {{ $item->quantity }}</small><br>
                                            <small>Service Charge: ₹{{ number_format($item->service_charge ?? 0, 2) }}</small><br>
                                            <small>GST: ₹{{ number_format($item->gst ?? 0, 2) }}</small><br>
                                            <small>Delivery Fee: ₹{{ number_format($item->delivery ?? 0, 2) }}</small>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="order-actions">
                            <a href="{{ route('order.receipt', $order) }}" class="btn btn-primary"><i class="fas fa-file-pdf me-2"></i>Download Receipt</a>
                            <a href="{{ route('home') }}" class="btn btn-secondary me-2">Back to Home</a>
                        </div>
                    </div>
                @endforeach
                <div class="pagination">
                    {{ $orders->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
