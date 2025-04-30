<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p><strong>Ref Number:</strong> {{ str_pad($order->id, 10, '0', STR_PAD_LEFT) }}</p>
    <p><strong>Payment Time:</strong> {{ $order->created_at->format('d M Y, H:i') }}</p>
    <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
    <p><strong>Sender Name:</strong> {{ $order->name }}</p>
    <p><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>
</body>
</html>
