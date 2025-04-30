<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Fitness Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .hero {
            position: relative;
            height: 70vh;
            overflow: hidden;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .hero-content p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        .swiper-slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .product-section {
            padding: 4rem 0;
        }

        .product-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: #2575fc;
        }

        .filters {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
        }

        .filters h5 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .filters h6 {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .filters .form-range {
            width: 100%;
        }

        .filters .btn-secondary {
            background: #2575fc;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .filters .btn-secondary:hover {
            background: #1a5bbf;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-group-text {
            background: #2575fc;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .input-group-text svg {
            fill: #fff;
        }

        #product-list .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #product-list .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        #product-list .card-img-top {
            border-radius: 10px 10px 0 0;
            height: 200px;
            object-fit: cover;
        }

        #product-list .card-body {
            padding: 1.5rem;
        }

        #product-list .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
        }

        #product-list .card-text {
            font-size: 0.9rem;
            color: #666;
        }

        .pagination .page-item .page-link {
            color: #2575fc;
            border: none;
            margin: 0 0.25rem;
            border-radius: 5px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .pagination .page-item.active .page-link {
            background: #2575fc;
            color: #fff;
        }

        .pagination .page-item .page-link:hover {
            background: #f0f0f0;
        }

        footer {
            background: #2575fc;
            color: #fff;
            padding: 1.5rem 0;
            text-align: center;
            margin-top: 4rem;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        footer a:hover {
            opacity: 0.8;
        }

        .btn-primary {
            background-color: #2575fc;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #1a5bbf;
        }

        .cart-summary {
            background: #fff;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 1rem;
        }

        @media (max-width: 767px) {
            .d-flex.justify-content-between.align-items-center.mb-5 {
                flex-direction: column;
                text-align: center;
            }

            .btn-secondary, .btn-primary {
                margin-top: 1rem;
            }

            .filters {
                margin-bottom: 1rem;
            }

            .cart-summary {
                margin-top: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=2720&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1545389336-cf090694435e?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1532798442725-41036acc7489?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1522898467493-49726bf28798?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="hero-content">
            <h1>Yoga Fitness Services</h1>
            <p>Relax, Stretch, and Strengthen with Our Yoga Fitness Services</p>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="product-section py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h1 class="text-center mb-0">Our {{ $category->name }} Service</h1>
                <div>
                    <a href="{{ route('home') }}" class="btn btn-secondary me-2">Back to Home</a>
                    @auth
                        <a href="{{ route('saved.items') }}" class="btn btn-outline-info me-2 position-relative">
                            <i class="fas fa-bookmark"></i> Saved Items
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info" id="saved-items-count">{{ $savedItemsCount }}</span>
                        </a>
                    @endauth
                    <a href="{{ route('cart.index') }}" class="btn btn-primary position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-count">0</span>
                    </a>
                </div>
            </div>

            <!-- Search Box and Results -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" id="search-box" class="form-control" placeholder="Search services..." aria-label="Search services">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            <button type="button" id="clear-search" class="btn btn-outline-secondary btn-close" aria-label="Clear search" style="display: none;"></button>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <p class="mb-0" id="results-count">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $totalProducts }} results</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="filters p-3 bg-white shadow-sm rounded position-relative">
                        <h5>Filters</h5>
                        <div class="mb-3">
                            <h6>Price</h6>
                            <input type="range" id="price-range" min="0" max="5000" value="5000" class="form-range">
                            <p id="price-range-value">₹0 - ₹5000</p>
                        </div>
                        <button class="btn btn-secondary w-100" id="clear-filters">Clear All</button>
                        @auth
                            <a href="{{ route('order.history') }}" class="btn btn-outline-primary w-100 mt-3">View Order History</a>
                        @endauth
                        <div class="cart-summary mt-4 p-3 bg-light rounded" id="cart-summary">
                            <h5>Cart Summary</h5>
                            <p>Total Amount: ₹<span id="cart-total">0.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row" id="product-list">
                        @include('partials.product-list', ['products' => $products])
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <nav aria-label="Page navigation">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: { delay: 2000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', dynamicBullets: true, clickable: true },
        });

        $('#search-box').on('input', function () {
            const searchValue = $(this).val();
            $('#clear-search').toggle(searchValue.length > 0);
            filterProducts();
        });

        $('#clear-search').on('click', function () {
            $('#search-box').val('');
            $(this).hide();
            filterProducts();
        });

        $('#price-range').on('input', function () {
            $('#price-range-value').text('₹0 - ₹' + $(this).val());
            filterProducts();
        });

        $('#clear-filters').on('click', function () {
            $('#search-box').val('');
            $('#price-range').val(5000);
            $('#price-range-value').text('₹0 - ₹5000');
            $('#clear-search').hide();
            filterProducts();
        });

        function filterProducts(page = 1) {
            const searchQuery = $('#search-box').val();
            const priceRange = $('#price-range').val();

            $.ajax({
                url: '{{ route("yoga.filter.products") }}',
                method: 'GET',
                data: { search: searchQuery, price: priceRange, page: page },
                success: function (response) {
                    $('#product-list').html(response.products);
                    $('#results-count').text(`Showing ${response.first_item || 1} to ${response.last_item || response.count} of ${response.total} results`);
                    $('nav[aria-label="Page navigation"]').html(response.pagination);
                    attachPaginationListeners();
                    bindAddToCartEvents();
                    bindLikeEvents();
                    bindWishlistEvents();
                },
                error: function (xhr) {
                    console.error('Error:', xhr.responseText);
                }
            });
        }

        function attachPaginationListeners() {
            $('nav[aria-label="Page navigation"] a').on('click', function (e) {
                e.preventDefault();
                const page = $(this).attr('href').split('page=')[1] || 1;
                filterProducts(page);
            });
        }

        attachPaginationListeners();

        let cart = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];

        function addToCart(product) {
            @if(!auth()->check())
                window.location.href = "{{ route('login') }}";
                return;
            @endif

            const existingItem = cart.find(item => item.id === product.id);
            const newItem = {
                id: product.id, name: product.name, description: product.description,
                price: parseFloat(product.price) || 0, image: product.image,
                service_charge: parseFloat(product.service_charge_percentage) || 10,
                gst: parseFloat(product.gst_percentage) || 18,
                delivery: parseFloat(product.delivery_fee) || 150, quantity: 1
            };

            if (existingItem) {
                existingItem.quantity = parseInt(existingItem.quantity || 1) + 1;
            } else {
                cart.push(newItem);
            }

            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateCart();
        }

        function updateCart() {
            @if(!auth()->check())
                $('#cart-total').text('0.00');
                $('#cart-count').text('0');
                $('#cart-summary').addClass('show');
                return;
            @endif

            const totalItems = cart.reduce((sum, item) => sum + (parseInt(item.quantity) || 1), 0);
            const total = cart.reduce((sum, item) => {
                const price = parseFloat(item.price) || 0;
                const serviceCharge = parseFloat(item.service_charge) || 10;
                const gst = parseFloat(item.gst) || 18;
                const delivery = parseFloat(item.delivery_fee) || 150;
                const quantity = parseInt(item.quantity) || 1;
                const itemTotal = price + (price * (serviceCharge / 100)) + (price * (gst / 100)) + delivery;
                return sum + (itemTotal * quantity);
            }, 0);

            $('#cart-total').text(total.toFixed(2));
            $('#cart-count').text(totalItems);
            $('#cart-summary').addClass('show');
        }

        function bindAddToCartEvents() {
            $('.add-to-cart').off('click').on('click', function() {
                const product = {
                    id: $(this).data('id'), name: $(this).data('name'), description: $(this).data('description'),
                    price: $(this).data('price'), image: $(this).data('image'),
                    service_charge_percentage: $(this).data('service-charge'), gst_percentage: $(this).data('gst'),
                    delivery_fee: $(this).data('delivery')
                };
                addToCart(product);
            });
        }

        function bindLikeEvents() {
            $('.like-product').off('click').on('click', function() {
                @if(!auth()->check())
                    window.location.href = "{{ route('login') }}";
                    return;
                @endif

                const productId = $(this).data('id');
                const $button = $(this);

                $.ajax({
                    url: '{{ route("yoga.product.like") }}',
                    method: 'POST',
                    data: { product_id: productId, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success) {
                            $button.toggleClass('btn-outline-danger btn-danger', response.liked);
                            showToast(response.message);
                            updateSavedItemsCount();
                        }
                    },
                    error: function(xhr) { console.error('Error:', xhr.responseText); }
                });
            });
        }

        function bindWishlistEvents() {
            $('.wishlist-product').off('click').on('click', function() {
                @if(!auth()->check())
                    window.location.href = "{{ route('login') }}";
                    return;
                @endif

                const productId = $(this).data('id');
                const $button = $(this);

                $.ajax({
                    url: '{{ route("yoga.wishlist.add") }}',
                    method: 'POST',
                    data: { product_id: productId, _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success) {
                            $button.toggleClass('btn-outline-success btn-success', response.wishlisted);
                            showToast(response.wishlisted ? 'Added to wishlist' : 'Removed from wishlist');
                            updateSavedItemsCount();
                        }
                    },
                    error: function(xhr) {
                        console.error('Wishlist error:', xhr.responseText);
                        showToast('Error updating wishlist', 'error');
                    }
                });
            });
        }

        function updateSavedItemsCount() {
            @if(auth()->check())
                $.ajax({
                    url: '{{ route("yoga.saved.items.count") }}',
                    method: 'GET',
                    success: function(response) {
                        $('#saved-items-count').text(response.count);
                    },
                    error: function(xhr) { console.error('Error fetching saved items count:', xhr.responseText); }
                });
            @endif
        }

        function showToast(message, type = 'success') {
            const $toast = $(`<div class="alert alert-${type} position-fixed bottom-0 end-0 m-3" style="z-index: 1050">${message}</div>`);
            $('body').append($toast);
            $toast.fadeIn(300).delay(3000).fadeOut(300, () => $toast.remove());
        }

        $(document).ready(function() {
            updateCart();
            bindAddToCartEvents();
            bindLikeEvents();
            bindWishlistEvents();
            updateSavedItemsCount();
        });
    </script>
</body>
</html>
