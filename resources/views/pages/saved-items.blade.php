<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Saved Items - Carpenter Quick Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --danger: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.08);
            --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        /* Hero Slider Section */
        .hero-slider {
            position: relative;
            height: 400px;
            width: 100%;
            overflow: hidden;
            margin-bottom: 60px;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 0 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .swiper-pagination-bullet {
            background: white;
            opacity: 0.6;
            width: 10px;
            height: 10px;
        }

        .swiper-pagination-bullet-active {
            background: var(--primary);
            opacity: 1;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            padding: 0 20px;
        }

        /* Navigation Tabs */
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .nav-tabs {
            border: none;
            gap: 10px;
        }

        .nav-tabs .nav-link {
            border: none;
            padding: 12px 24px;
            border-radius: var(--radius-sm);
            color: var(--gray);
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            background: white;
            box-shadow: var(--shadow-sm);
        }

        .nav-tabs .nav-link.active {
            background: var(--primary);
            color: white;
            box-shadow: var(--shadow-md);
        }

        .nav-tabs .badge {
            margin-left: 8px;
            background-color: rgba(255,255,255,0.2);
            font-weight: 600;
        }

        /* Cart Button */
        .cart-btn-wrapper {
            position: relative;
        }

        .cart-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: var(--radius-sm);
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
        }

        .cart-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--danger);
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
        }

        /* Tab Content */
        .tab-content {
            background: transparent;
            padding: 0;
        }

        /* Product Cards */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }

        .product-card {
            background: white;
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .product-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .product-body {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .product-description {
            font-size: 0.875rem;
            color: var(--gray);
            margin-bottom: 16px;
            flex-grow: 1;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 16px;
        }

        .price-details {
            background: var(--light-gray);
            border-radius: var(--radius-sm);
            padding: 12px;
            margin-bottom: 16px;
        }

        .price-detail-row {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: var(--gray);
            margin-bottom: 4px;
        }

        .product-actions {
            display: flex;
            justify-content: space-between;
            gap: 12px;
        }

        .btn {
            border-radius: var(--radius-sm);
            padding: 8px 16px;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .btn-danger {
            background: var(--danger);
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background: #e5177b;
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        /* Empty State */
        .empty-state {
            background: white;
            border-radius: var(--radius-md);
            padding: 60px 20px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            max-width: 600px;
            margin: 0 auto;
        }

        .empty-icon {
            font-size: 4rem;
            color: var(--gray);
            opacity: 0.3;
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--dark);
        }

        .empty-text {
            color: var(--gray);
            margin-bottom: 24px;
        }

        /* Back Button */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: var(--radius-sm);
            background: white;
            box-shadow: var(--shadow-sm);
            margin-top: 40px;
        }

        .back-btn:hover {
            color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-slider {
                height: 350px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-slider {
                height: 300px;
                margin-bottom: 40px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .nav-container {
                flex-direction: column;
                align-items: stretch;
            }

            .nav-tabs {
                flex-direction: row;
                overflow-x: auto;
                padding-bottom: 10px;
            }

            .nav-tabs .nav-link {
                white-space: nowrap;
            }

            .cart-btn-wrapper {
                width: 100%;
            }

            .cart-btn {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .hero-slider {
                height: 250px;
            }

            .hero-content h1 {
                font-size: 1.8rem;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Slider Section -->
    <section class="hero-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/medium-shot-people-cleaning-building_23-2150454517.jpg?t=st=1743599053~exp=1743602653~hmac=a9cfd392b9515473f873aa8c13268b5bcd3dfdac99a27e78c49c2f2e8af97218&w=1800')">
                    <div class="hero-content">
                        <h1>Your Saved Items</h1>
                        <p>Manage your wishlist and liked products in one place</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/part-male-construction-worker_329181-3734.jpg?t=st=1743599112~exp=1743602712~hmac=a44143ad5388accc7b0982cd2718de5c83175f2239cede9438b1de11e014bfce&w=1800')">
                    <div class="hero-content">
                        <h1>Quality Carpentry</h1>
                        <p>Save your favorite items for easy access</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/woman-inviting-man-house-with-tools_259150-58291.jpg?t=st=1743599140~exp=1743602740~hmac=e4350bc9cd8d29ebca13020b15b0eac9471c3cc7f920eff6e4f8388424e023ef&w=1800')">
                    <div class="hero-content">
                        <h1>Build Your Dream</h1>
                        <p>Create collections of your preferred products</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <div class="container">
        <div class="nav-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="wishlist-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button" role="tab">
                        <i class="fas fa-heart"></i> Wishlist <span class="badge">{{ $wishlist->count() }}</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="likes-tab" data-bs-toggle="tab" data-bs-target="#likes" type="button" role="tab">
                        <i class="fas fa-thumbs-up"></i> Likes <span class="badge">{{ $likes->count() }}</span>
                    </button>
                </li>
            </ul>

            <div class="cart-btn-wrapper">
                <a href="{{ route('cart.index') }}" class="cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Cart</span>
                    <span class="cart-count" id="cart-count">0</span>
                </a>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <!-- Wishlist Tab -->
            <div class="tab-pane fade show active" id="wishlist" role="tabpanel">
                <div class="product-grid">
                    @forelse($wishlist as $item)
                        <div class="product-card">
                            <img src="{{ $item->product->image }}" class="product-image" alt="{{ $item->product->name }}">
                            <div class="product-body">
                                <h3 class="product-title">{{ $item->product->name }}</h3>
                                <p class="product-description">{{ Str::limit($item->product->description, 100) }}</p>

                                @php
                                    $totalPrice = $item->product->price +
                                                  ($item->product->price * ($item->product->service_charge_percentage / 100)) +
                                                  ($item->product->price * ($item->product->gst_percentage / 100)) +
                                                  $item->product->delivery_fee;
                                @endphp
                                <div class="product-price">₹{{ number_format($totalPrice, 2) }}</div>

                                <div class="price-details">
                                    <div class="price-detail-row">
                                        <span>Base Price:</span>
                                        <span>₹{{ number_format($item->product->price, 2) }}</span>
                                    </div>
                                    <div class="price-detail-row">
                                        <span>Service Charge ({{ $item->product->service_charge_percentage }}%):</span>
                                        <span>₹{{ number_format($item->product->price * ($item->product->service_charge_percentage / 100), 2) }}</span>
                                    </div>
                                    <div class="price-detail-row">
                                        <span>GST ({{ $item->product->gst_percentage }}%):</span>
                                        <span>₹{{ number_format($item->product->price * ($item->product->gst_percentage / 100), 2) }}</span>
                                    </div>
                                    <div class="price-detail-row">
                                        <span>Delivery Fee:</span>
                                        <span>₹{{ number_format($item->product->delivery_fee, 2) }}</span>
                                    </div>
                                </div>

                                <div class="product-actions">
                                    <button class="btn btn-danger remove-from-wishlist" data-id="{{ $item->product->id }}">
                                        <i class="fas fa-trash-alt"></i> Remove
                                    </button>
                                    <button class="btn btn-primary add-to-cart"
                                            data-id="{{ $item->product->id }}"
                                            data-name="{{ $item->product->name }}"
                                            data-description="{{ $item->product->description }}"
                                            data-price="{{ $item->product->price }}"
                                            data-image="{{ $item->product->image }}"
                                            data-service-charge="{{ $item->product->service_charge_percentage }}"
                                            data-gst="{{ $item->product->gst_percentage }}"
                                            data-delivery="{{ $item->product->delivery_fee }}">
                                        <i class="fas fa-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="empty-state">
                            <div class="empty-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3 class="empty-title">Your Wishlist is Empty</h3>
                            <p class="empty-text">Save products to your wishlist to view them here</p>
                            <a href="{{ route('carpenter') }}" class="btn btn-primary">
                                <i class="fas fa-store"></i> Browse Products
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Likes Tab -->
            <div class="tab-pane fade" id="likes" role="tabpanel">
                <div class="product-grid">
                    @forelse($likes as $like)
                        <div class="product-card">
                            <img src="{{ $like->product->image }}" class="product-image" alt="{{ $like->product->name }}">
                            <div class="product-body">
                                <h3 class="product-title">{{ $like->product->name }}</h3>
                                <p class="product-description">{{ Str::limit($like->product->description, 100) }}</p>

                                @php
                                    $totalPrice = $like->product->price +
                                                  ($like->product->price * ($like->product->service_charge_percentage / 100)) +
                                                  ($like->product->price * ($like->product->gst_percentage / 100)) +
                                                  $like->product->delivery_fee;
                                @endphp
                                <div class="product-price">₹{{ number_format($totalPrice, 2) }}</div>

                                <div class="price-details">
                                    <div class="price-detail-row">
                                        <span>Base Price:</span>
                                        <span>₹{{ number_format($like->product->price, 2) }}</span>
                                    </div>
                                    <div class="price-detail-row">
                                        <span>Service Charge ({{ $like->product->service_charge_percentage }}%):</span>
                                        <span>₹{{ number_format($like->product->price * ($like->product->service_charge_percentage / 100), 2) }}</span>
                                    </div>
                                    <div class="price-detail-row">
                                        <span>GST ({{ $like->product->gst_percentage }}%):</span>
                                        <span>₹{{ number_format($like->product->price * ($like->product->gst_percentage / 100), 2) }}</span>
                                    </div>
                                    <div class="price-detail-row">
                                        <span>Delivery Fee:</span>
                                        <span>₹{{ number_format($like->product->delivery_fee, 2) }}</span>
                                    </div>
                                </div>

                                <div class="product-actions">
                                    <button class="btn btn-danger unlike-product" data-id="{{ $like->product->id }}">
                                        <i class="fas fa-thumbs-down"></i> Unlike
                                    </button>
                                    <button class="btn btn-primary add-to-cart"
                                            data-id="{{ $like->product->id }}"
                                            data-name="{{ $like->product->name }}"
                                            data-description="{{ $like->product->description }}"
                                            data-price="{{ $like->product->price }}"
                                            data-image="{{ $like->product->image }}"
                                            data-service-charge="{{ $like->product->service_charge_percentage }}"
                                            data-gst="{{ $like->product->gst_percentage }}"
                                            data-delivery="{{ $like->product->delivery_fee }}">
                                        <i class="fas fa-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="empty-state">
                            <div class="empty-icon">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <h3 class="empty-title">No Liked Products</h3>
                            <p class="empty-text">Like products to save them for later</p>
                            <a href="{{ route('carpenter') }}" class="btn btn-primary">
                                <i class="fas fa-store"></i> Browse Products
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center">
            <a href="{{ route('carpenter') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i> Continue Shopping
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        $(document).ready(function() {
            // Initialize cart from sessionStorage
            let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            // Update cart count on page load
            updateCartCount();

            // Bind all event listeners
            bindEvents();

            function bindEvents() {
                // Remove from wishlist
                $('.remove-from-wishlist').on('click', function() {
                    const productId = $(this).data('id');
                    const $button = $(this);
                    removeFromWishlist(productId, $button);
                });

                // Unlike product
                $('.unlike-product').on('click', function() {
                    const productId = $(this).data('id');
                    const $button = $(this);
                    unlikeProduct(productId, $button);
                });

                // Add to cart
                $('.add-to-cart').on('click', function() {
                    const product = {
                        id: $(this).data('id'),
                        name: $(this).data('name'),
                        description: $(this).data('description'),
                        price: parseFloat($(this).data('price')) || 0,
                        image: $(this).data('image'),
                        service_charge: parseFloat($(this).data('service-charge')) || 10,
                        gst: parseFloat($(this).data('gst')) || 18,
                        delivery: parseFloat($(this).data('delivery')) || 150,
                        quantity: 1
                    };
                    addToCart(product);
                });
            }

            function removeFromWishlist(productId, $button) {
                $.ajax({
                    url: '{{ route("wishlist.add") }}',
                    method: 'POST',
                    data: { product_id: productId, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success && !response.wishlisted) {
                            $button.closest('.product-card').fadeOut(300, function() {
                                $(this).remove();
                                $('#wishlist-tab .badge').text(parseInt($('#wishlist-tab .badge').text()) - 1);
                                checkEmptyState('wishlist');
                            });
                            showToast(response.message);
                        }
                    },
                    error: function(xhr) {
                        console.error('Remove wishlist error:', xhr.responseText);
                        showToast('Error removing from wishlist', 'error');
                    }
                });
            }

            function unlikeProduct(productId, $button) {
                $.ajax({
                    url: '{{ route("product.like") }}',
                    method: 'POST',
                    data: { product_id: productId, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success && !response.liked) {
                            $button.closest('.product-card').fadeOut(300, function() {
                                $(this).remove();
                                $('#likes-tab .badge').text(parseInt($('#likes-tab .badge').text()) - 1);
                                checkEmptyState('likes');
                            });
                            showToast(response.message);
                        }
                    },
                    error: function(xhr) {
                        console.error('Unlike error:', xhr.responseText);
                        showToast('Error unliking product', 'error');
                    }
                });
            }

            function checkEmptyState(tab) {
                if ($(`#${tab} .product-card`).length === 0) {
                    $(`#${tab} .product-grid`).html(`
                        <div class="empty-state">
                            <div class="empty-icon">
                                <i class="fas fa-${tab === 'wishlist' ? 'heart' : 'thumbs-up'}"></i>
                            </div>
                            <h3 class="empty-title">${tab === 'wishlist' ? 'Your Wishlist is Empty' : 'No Liked Products'}</h3>
                            <p class="empty-text">${tab === 'wishlist' ? 'Save products to your wishlist to view them here' : 'Like products to save them for later'}</p>
                            <a href="{{ route("carpenter") }}" class="btn btn-primary">
                                <i class="fas fa-store"></i> Browse Products
                            </a>
                        </div>
                    `);
                }
            }

            function addToCart(product) {
                // Check if product already exists in cart
                const existingItemIndex = cart.findIndex(item => item.id === product.id);

                if (existingItemIndex >= 0) {
                    // Increment quantity if product exists
                    cart[existingItemIndex].quantity += 1;
                } else {
                    // Add new product to cart
                    cart.push(product);
                }

                // Save to sessionStorage
                sessionStorage.setItem('cart', JSON.stringify(cart));

                // Update cart count
                updateCartCount();

                // Show success message
                showToast('Added to cart: ' + product.name);
            }

            function updateCartCount() {
                // Calculate total items in cart
                const totalItems = cart.reduce((sum, item) => sum + (parseInt(item.quantity) || 1), 0);

                // Update cart count badge
                $('#cart-count').text(totalItems);

                // Show/hide badge based on count
                if (totalItems > 0) {
                    $('#cart-count').show();
                } else {
                    $('#cart-count').hide();
                }
            }

            function showToast(message, type = 'success') {
                const toast = document.createElement('div');
                toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0 position-fixed bottom-0 end-0 m-3`;
                toast.style.zIndex = '1050';
                toast.setAttribute('role', 'alert');
                toast.setAttribute('aria-live', 'assertive');
                toast.setAttribute('aria-atomic', 'true');

                toast.innerHTML = `
                    <div class="d-flex">
                        <div class="toast-body">
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                `;

                document.body.appendChild(toast);
                const bsToast = new bootstrap.Toast(toast);
                bsToast.show();

                setTimeout(() => {
                    toast.remove();
                }, 3000);
            }
        });
    </script>
</body>
</html>
