<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.9);
            padding: 1.25rem 3rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Logo */
        .navbar-brand img {
            height: 55px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.08);
        }

        /* Navigation Links */
        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-link {
            color: #1e293b;
            font-weight: 500;
            font-size: 1.1rem;
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #3b82f6;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Right Section */
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        /* Cart */
        .cart-link {
            color: #1e293b;
            font-size: 1.4rem;
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .cart-link:hover {
            color: #3b82f6;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            min-width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ef4444;
            color: #fff;
            font-size: 0.7rem;
            border-radius: 50%;
            padding: 0.2rem;
        }

        /* Profile Dropdown */
        .profile-container {
            position: relative;
        }

        .profile-btn {
            background: none;
            border: none;
            color: #1e293b;
            font-weight: 500;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .profile-btn:hover {
            color: #3b82f6;
        }

        .profile-btn i {
            font-size: 1.4rem;
        }

        .profile-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            min-width: 220px;
            z-index: 1000;
            padding: 0.5rem 0;
        }

        .profile-dropdown.show {
            display: block;
        }

        .profile-dropdown-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.25rem;
            color: #1e293b;
            text-decoration: none;
            font-size: 0.95rem;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .profile-dropdown-item:hover {
            background: #f1f5f9;
            color: #3b82f6;
        }

        .profile-dropdown-item i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        /* Language Switcher */
        .language-switcher .btn {
            background: #f1f5f9;
            border: none;
            color: #1e293b;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            width: 100%;
            text-align: left;
        }

        .language-switcher .dropdown-menu {
            width: 100%;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .language-switcher .dropdown-item {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }

        /* Guest Links */
        .login-link {
            color: #1e293b;
            font-weight: 500;
            font-size: 1rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            color: #3b82f6;
        }

        .login-link i {
            font-size: 1.2rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .navbar {
                padding: 1rem;
            }

            .navbar-brand img {
                height: 45px;
            }

            .navbar-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-nav {
                flex-direction: column;
                gap: 1rem;
                width: 100%;
                margin-top: 1rem;
            }

            .navbar-right {
                flex-direction: column;
                width: 100%;
                gap: 1rem;
                margin-top: 1rem;
            }

            .profile-dropdown {
                position: static;
                width: 100%;
                border-radius: 0;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                height: 40px;
            }

            .nav-link {
                font-size: 1rem;
            }

            .cart-link,
            .profile-btn i,
            .login-link i {
                font-size: 1.2rem;
            }

            .profile-btn,
            .login-link {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/hd logo.png') }}" alt="Quick Services Logo">
            </a>

            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Navigation Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" aria-label="{{ __('Home page') }}">
                            {{ __('messages.home', ['default' => 'Home']) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" aria-label="{{ __('Our services') }}">
                            {{ __('messages.services', ['default' => 'Services']) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#meet-our-team" aria-label="{{ __('About our company') }}">
                            {{ __('messages.about_us', ['default' => 'About Us']) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#get-in-touch" aria-label="{{ __('Contact our team') }}">
                            {{ __('messages.contact_us', ['default' => 'Contact Us']) }}
                        </a>
                    </li>
                </ul>

                <!-- Right Section -->
                <div class="navbar-right">
                    @auth
                        <!-- Cart -->
                        <a href="{{ route('cart.index') }}" class="cart-link">
                            <i class="bi bi-cart"></i>
                            <span id="header-cart-count" class="cart-badge">0</span>
                        </a>

                        <!-- Profile Dropdown -->
                        <div class="profile-container">
                            <button class="profile-btn" id="profile-btn">
                                <i class="bi bi-person-circle"></i>
                                <span>{{ Auth::user()->name }}</span>
                            </button>
                            <div class="profile-dropdown" id="profile-dropdown">
                                <a href="{{ route('order.history') }}" class="profile-dropdown-item">
                                    <i class="bi bi-clock-history"></i> View Order History
                                </a>
                                <div class="profile-dropdown-item language-switcher">
                                    <button class="btn dropdown-toggle" type="button" id="lang-btn">
                                        <i class="bi bi-translate"></i>
                                        <span id="selected-lang">
                                            @switch(app()->getLocale())
                                                @case('hi') HI @break
                                                @case('gu') GU @break
                                                @default EN
                                            @endswitch
                                        </span>
                                    </button>
                                    <ul id="lang-menu" class="dropdown-menu" style="display: none;">
                                        <li>
                                            <form action="{{ route('language.switch', 'en') }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="dropdown-item">English (EN)</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('language.switch', 'hi') }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="dropdown-item">हिन्दी (HI)</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('language.switch', 'gu') }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="dropdown-item">ગુજરાતી (GU)</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="profile-dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="login-link">
                            <i class="bi bi-person"></i> Login
                        </a>
                        <a href="{{ route('register') }}" class="login-link">
                            <i class="bi bi-person-plus"></i> Register
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Profile Dropdown Toggle
        document.addEventListener("DOMContentLoaded", function() {
            const profileBtn = document.getElementById("profile-btn");
            const profileDropdown = document.getElementById("profile-dropdown");
            const langBtn = document.getElementById("lang-btn");
            const langMenu = document.getElementById("lang-menu");

            profileBtn?.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                profileDropdown.classList.toggle("show");
            });

            langBtn?.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                langMenu.style.display = langMenu.style.display === "block" ? "none" : "block";
            });

            document.addEventListener("click", function(e) {
                if (!profileBtn?.contains(e.target) && !profileDropdown?.contains(e.target)) {
                    profileDropdown.classList.remove("show");
                }
                if (!langBtn?.contains(e.target) && !langMenu?.contains(e.target)) {
                    langMenu.style.display = "none";
                }
            });

            document.querySelectorAll('#lang-menu form')?.forEach(form => {
                form.addEventListener('submit', function() {
                    const selectedText = this.querySelector('button').textContent.split(' ')[1];
                    document.getElementById('selected-lang').textContent = selectedText;
                });
            });
        });

        // Cart Logic
        const isAuthenticated = {!! json_encode(Auth::check()) !!};
        let cart = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];

        function updateHeaderCartCount() {
            if (isAuthenticated) {
                const totalItems = cart.reduce((sum, item) => sum + (parseInt(item.quantity) || 1), 0);
                $('#header-cart-count').text(totalItems);
            }
        }

        function addToCart(product) {
            if (!isAuthenticated) {
                window.location.href = '{{ route("login") }}';
                return;
            }

            const existingItem = cart.find(item => item.id === product.id);
            const newItem = {
                id: product.id,
                name: product.name,
                description: product.description,
                price: parseFloat(product.price) || 0,
                image: product.image,
                service_charge: parseFloat(product.service_charge_percentage) || 10,
                gst: parseFloat(product.gst_percentage) || 18,
                delivery: parseFloat(product.delivery_fee) || 150,
                quantity: 1
            };

            if (existingItem) {
                existingItem.quantity = parseInt(existingItem.quantity || 1) + 1;
            } else {
                cart.push(newItem);
            }

            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateHeaderCartCount();

            if (typeof updateCart === 'function') {
                updateCart();
            }
        }

        // Scroll Effect
        $(window).on('scroll', function() {
            $('.navbar').toggleClass('scrolled', $(window).scrollTop() > 50);
        });

        $(document).ready(function() {
            if (isAuthenticated) {
                updateHeaderCartCount();
            }
        });
    </script>
</body>
</html>
