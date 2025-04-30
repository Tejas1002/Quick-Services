<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 1.5rem auto;
            padding: 0 15px;
        }

        .order-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            max-height: 90vh;
            overflow-y: auto;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        .order-header h2 {
            color: #2575fc;
            font-weight: 700;
            font-size: 1.8rem;
            margin: 0;
        }

        .back-btn {
            background: #6c757d;
            color: #fff;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            font-size: 0.95rem;
        }

        .form-control {
            border-radius: 8px;
            padding: 0.75rem;
            border: 1px solid #e0e0e0;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.2);
        }

        .payment-section {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e9ecef;
        }

        .payment-section h4 {
            color: #2575fc;
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .payment-method {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 1rem;
        }

        .payment-card {
            flex: 1;
            min-width: 200px;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .payment-card:hover {
            border-color: #2575fc;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(37, 117, 252, 0.2);
        }

        .payment-card input[type="radio"] {
            display: none;
        }

        .payment-card input[type="radio"]:checked + label {
            background: #f8f9fa;
            border-color: #2575fc;
            color: #2575fc;
        }

        .payment-card label {
            display: block;
            font-weight: 600;
            color: #333;
            margin: 0;
            padding: 0.5rem;
        }

        .payment-card i {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #666;
        }

        .submit-btn {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
        }

        .submit-btn:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        @media (max-width: 767px) {
            .order-container {
                padding: 1rem;
                max-height: 85vh;
            }

            .form-control {
                padding: 0.5rem;
            }

            .payment-method {
                flex-direction: column;
            }

            .payment-card {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="order-container">
            <!-- Order Header with Back Button -->
            <div class="order-header">
                <h2>Checkout Details</h2>
                <a href="{{ route('cart.index') }}" class="back-btn">
                    <i class="fas fa-arrow-left"></i> Back to Cart
                </a>
            </div>

            <form id="order-form" method="POST" action="{{ route('order.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="address" class="form-label">Delivery Address *</label>
                            <textarea class="form-control" id="address" name="address" rows="2" required>{{ old('address', $user->address ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="form-label">City *</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $user->city ?? '') }}" required>
                        </div>
                    </div>
                </div>

                <div class="payment-section">
                    <h4>Payment Method</h4>
                    <div class="payment-method">
                        <input type="radio" id="cod" name="payment_method" value="cod" required>
                        <label for="cod" class="payment-card">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>Cash on Delivery</span>
                        </label>

                        <input type="radio" id="card" name="payment_method" value="card">
                        <label for="card" class="payment-card">
                            <i class="fas fa-credit-card"></i>
                            <span>Credit/Debit Card</span>
                        </label>

                        <input type="radio" id="upi" name="payment_method" value="upi">
                        <label for="upi" class="payment-card">
                            <i class="fas fa-mobile-alt"></i>
                            <span>UPI Payment</span>
                        </label>
                    </div>
                </div>

                <input type="hidden" name="cart_data" id="cart-data">
                <input type="hidden" name="total_amount" id="total-amount" value="{{ session('cart_total', 0) }}">

                <button type="submit" class="submit-btn">
                    Place Order (₹<span id="order-total">0.00</span>)
                </button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const cart = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];
            let subtotal = 0;
            let shipping = 50;

            cart.forEach(item => {
                const price = parseFloat(item.price) || 0;
                const serviceCharge = parseFloat(item.service_charge) || 10;
                const gst = parseFloat(item.gst) || 18;
                const delivery = parseFloat(item.delivery) || 150;
                const quantity = parseInt(item.quantity) || 1;

                const itemTotal = price +
                                (price * (serviceCharge / 100)) +
                                (price * (gst / 100)) +
                                delivery;
                subtotal += itemTotal * quantity;
            });

            const total = subtotal + shipping;
            $('#order-total').text(total.toFixed(2));
            $('#total-amount').val(total);

            // Store cart data in hidden field
            $('#cart-data').val(JSON.stringify(cart));

            $('#order-form').on('submit', function(e) {
                if (!this.checkValidity()) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                $(this).addClass('was-validated');
            });
        });
    </script>
</body>
</html>
