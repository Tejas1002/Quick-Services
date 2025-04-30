<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrician Quick Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
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
            padding: 0;
            background: #f8f9fa;
        }

        .section-header {
            position: sticky;
            top: 0;
            z-index: 10;
            padding: 1.5rem 0;
            margin-bottom: 30px
            background: #f8f9fa;
            border-bottom: 1px solid #e2e8f0;
        }

        .product-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2575fc;
        }

        .header-actions {
            display: flex;
            gap: 0.5rem;
        }

        .filters {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            position: sticky;
            top: calc(100px + 1.5rem); /* Adjust based on header height */
            overflow-y: hidden; /* Hide scrollbar */
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
        }

        .filters::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
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

        .filters .input-group {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .filters .input-group-text {
            background: #2575fc;
            color: #fff;
            border: none;
        }

        .filters .input-group-text svg {
            fill: #fff;
        }

        #clear-search {
            position: absolute;
            right: 3rem;
            top: 50%;
            transform: translateY(-50%);
        }

        .results-count {
            font-size: 0.9rem;
            text-align: center;
        }

        .filters .btn-secondary {
            background: #2575fc;
            border: none;
            padding: 0.5rem 1rem;
            transition: background 0.3s ease;
        }

        .filters .btn-secondary:hover {
            background: #1a5bbf;
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

        .btn-primary {
            background-color: #2575fc;
            border: none;
            padding: 0.5rem 1rem;
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
        }

        @media (max-width: 767px) {
            .section-header {
                padding: 1rem 0;
            }

            .d-flex.justify-content-between.align-items-center {
                flex-direction: column;
                text-align: center;
            }

            .header-actions {
                margin-top: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }

            .filters {
                position: static;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1608613304899-ea8098577e38?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.pexels.com/photos/8853502/pexels-photo-8853502.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1621905251918-48416bd8575a?q=80&w=2669&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1646640381839-02748ae8ddf0?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="hero-content">
            <h1>Electrician Quick Service</h1>
            <p>Fast, Reliable, and Professional Services at Your Fingertips</p>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="product-section py-5 bg-light">
        <div class="container">
            <div class="section-header sticky-top bg-light py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="text-center mb-0">Our {{ $category->name }} Service</h1>
                    <div class="header-actions">
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
            </div>

            <div class="row product-content">
                <div class="col-md-3">
                    <div class="filters p-3 bg-white shadow-sm rounded">
                        <h5>Filters</h5>
                        <!-- Search Bar Inside Filters -->
                        <div class="input-group mb-3">
                            <input type="text" id="search-box" class="form-control" placeholder="Search services..." aria-label="Search services">
                            <button type="button" id="clear-search" class="btn btn-outline-secondary btn-close" aria-label="Clear search" style="display: none;"></button>
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </span>
                        </div>
                        <p class="results-count mb-3 text-muted" id="results-count">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $totalProducts }} results</p>
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
                url: '{{ route("electrician.filter.products") }}',
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
                    url: '{{ route("electrician.product.like") }}',
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
                    url: '{{ route("electrician.wishlist.add") }}',
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
                    url: '{{ route("electrician.saved.items.count") }}',
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
