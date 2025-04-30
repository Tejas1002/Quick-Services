@component('mail::message')
# User Activity Notification

A user has performed an action on your platform.

**Activity:** {{ $activity }}
**User Name:** {{ $user->name }}
**User Email:** {{ $user->email }}
**Timestamp:** {{ now()->toDateTimeString() }}

@if($activity === 'Order Placed' && !empty($details))
## Order Details
- **Order ID:** {{ $details['order_id'] }}
- **Total Amount:** ₹{{ number_format($details['total_amount'], 2) }}
- **Payment Method:** {{ ucfirst($details['payment_method']) }}
- **Items:**
@foreach($details['cart_items'] as $item)
  - {{ $item['name'] }} (Qty: {{ $item['quantity'] }}, Price: ₹{{ number_format($item['price'], 2) }})
@endforeach
@endif

Thank you,
{{ config('app.name') }} Team
@endcomponent
