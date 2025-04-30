<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpenter Quick Service - Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 15px;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e9ecef;
        }

        .cart-header h2 {
            font-size: 2rem;
            color: #2575fc;
            font-weight: 700;
            margin: 0;
        }

        .cart-header .item-count {
            color: #6c757d;
            font-size: 1.1rem;
        }

        .cart-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .cart-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 2rem;
        }

        .cart-table thead {
            background: #2575fc;
            color: #fff;
        }

        .cart-table th {
            padding: 1.25rem;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        .cart-table th:first-child {
            border-top-left-radius: 10px;
        }

        .cart-table th:last-child {
            border-top-right-radius: 10px;
        }

        .cart-table tbody tr {
            transition: all 0.3s ease;
        }

        .cart-table tbody tr:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .cart-table td {
            padding: 1.5rem;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .item-details h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .item-details p {
            font-size: 0.9rem;
            color: #6c757d;
            margin: 0;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            background: #f1f3f5;
            border-radius: 25px;
            padding: 0.25rem 0.75rem;
            width: fit-content;
        }

        .quantity-control button {
            width: 32px;
            height: 32px;
            border: none;
            background: #2575fc;
            color: #fff;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .quantity-control button:hover {
            background: #1a5bbf;
            transform: scale(1.05);
        }

        .quantity-control span {
            font-weight: 600;
            color: #333;
        }

        .price-details {
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .price-details .base-price {
            color: #333;
            font-weight: 600;
        }

        .price-details .charge {
            color: #6c757d;
        }

        .price-details .total {
            color: #28a745;
            font-weight: 600;
        }

        .remove-btn {
            background: none;
            border: none;
            color: #ff4444;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .remove-btn:hover {
            color: #dc3545;
            transform: scale(1.1);
        }

        .total-section {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
        }

        .total-section .total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .total-section .total-row.final {
            border-top: 1px solid #e9ecef;
            padding-top: 1rem;
            font-weight: 700;
            color: #28a745;
            font-size: 1.2rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: flex-end;
        }

        .back-btn {
            background: #6c757d;
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        .checkout-btn {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .checkout-btn:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        @media (max-width: 767px) {
            .cart-header {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .cart-table {
                display: block;
            }

            .cart-table thead {
                display: none;
            }

            .cart-table tbody tr {
                display: block;
                margin-bottom: 1.5rem;
                padding: 1rem;
                border: 1px solid #e9ecef;
                border-radius: 10px;
            }

            .cart-table td {
                display: block;
                text-align: left;
                padding: 0.5rem 0;
                border: none;
            }

            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .action-buttons {
                flex-direction: column;
            }

            .back-btn, .checkout-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cart-header">
            <h2>Shopping Cart</h2>
            <span class="item-count">You have {{ count(session('cart', [])) }} item(s) in your cart</span>
        </div>

        <div class="cart-container">
            <table class="cart-table" id="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cart items will be inserted here via JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="total-section">
            <div class="total-row">
                <span>Subtotal</span>
                <span id="subtotal">₹0.00</span>
            </div>
            <div class="total-row">
                <span>Shipping</span>
                <span id="shipping">₹50.00</span>
            </div>
            <div class="total-row final">
                <span>Total (Tax incl.)</span>
                <span id="total">₹0.00</span>
            </div>
            <div class="action-buttons">
                <a href="{{ route('carpenter') }}" class="back-btn">Continue Shopping</a>
                <button class="checkout-btn">Proceed to Checkout (₹<span id="checkout-total">0.00</span>)</button>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Cart Management
        let cart = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];

        function updateCartDisplay() {
            const cartTable = $('#cart-table tbody');
            cartTable.empty();

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

                const lineTotal = itemTotal * quantity;
                subtotal += lineTotal;

                cartTable.append(`
                    <tr data-id="${item.id}">
                        <td>
                            <div class="cart-item">
                                <img src="${item.image}" alt="${item.name}">
                                <div class="item-details">
                                    <h5>${item.name}</h5>
                                    <p>${item.description}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="quantity-control">
                                <button class="decrease-quantity">-</button>
                                <span class="quantity-value">${quantity}</span>
                                <button class="increase-quantity">+</button>
                            </div>
                        </td>
                        <td>
                            <div class="price-details">
                                <div class="base-price">Base Price: ₹${price.toFixed(2)}</div>
                                <div class="charge">Service: ₹${(price * (serviceCharge / 100)).toFixed(2)}</div>
                                <div class="charge">GST: ₹${(price * (gst / 100)).toFixed(2)}</div>
                                <div class="charge">Delivery: ₹${delivery.toFixed(2)}</div>
                                <div class="total">Total: ₹${lineTotal.toFixed(2)}</div>
                            </div>
                        </td>
                        <td>
                            <button class="remove-btn">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `);
            });

            const total = subtotal + shipping;
            $('#subtotal').text(`₹${subtotal.toFixed(2)}`);
            $('#shipping').text(`₹${shipping.toFixed(2)}`);
            $('#total').text(`₹${total.toFixed(2)}`);
            $('#checkout-total').text(total.toFixed(2));

            const totalItems = cart.reduce((sum, item) => sum + (parseInt(item.quantity) || 1), 0);
            $('.item-count').text(`You have ${totalItems} item(s) in your cart`);
        }

        function updateQuantity(id, change) {
            const item = cart.find(item => item.id === id);
            if (item) {
                item.quantity = Math.max(1, parseInt(item.quantity || 1) + change);
                sessionStorage.setItem('cart', JSON.stringify(cart));
                updateCartDisplay();
            }
        }

        function removeItem(id) {
            cart = cart.filter(item => item.id !== id);
            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay();
        }

        function debugCart() {
            console.log('Current cart contents:', cart);
            cart.forEach(item => {
                console.log(`Item ${item.name}:`, {
                    price: item.price,
                    service_charge: item.service_charge,
                    gst: item.gst,
                    delivery: item.delivery,
                    quantity: item.quantity
                });
            });
        }

        $(document).ready(function() {
            debugCart();
            updateCartDisplay();

            // Event delegation for quantity controls
            $('#cart-table').on('click', '.decrease-quantity', function() {
                const id = $(this).closest('tr').data('id');
                updateQuantity(id, -1);
            });

            $('#cart-table').on('click', '.increase-quantity', function() {
                const id = $(this).closest('tr').data('id');
                updateQuantity(id, 1);
            });

            // Event delegation for remove button
            $('#cart-table').on('click', '.remove-btn', function() {
                const id = $(this).closest('tr').data('id');
                removeItem(id);
            });

            $('.checkout-btn').on('click', function() {
        window.location.href = '{{ route("order.create") }}';
    });
        });
    </script>
</body>
</html>
