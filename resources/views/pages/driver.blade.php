<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Services - Coming Soon</title>
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

        .coming-soon-section {
            padding: 4rem 0;
            text-align: center;
        }

        .coming-soon-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2575fc;
            margin-bottom: 1rem;
        }

        .coming-soon-section p {
            font-size: 1.25rem;
            color: #666;
        }

        .btn-primary {
            background-color: #2575fc;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #1a5bbf;
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

        @media (max-width: 767px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .coming-soon-section h2 {
                font-size: 2rem;
            }

            .coming-soon-section p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1506526267617-d9906e87e7db?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1561651823-34b6a4ac2156?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1585016787687-b7044a3e4ab5?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="hero-content">
            <h1>Driver Services</h1>
            <p>Safe and Professional Driving Services - Coming Soon!</p>
        </div>
    </section>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section bg-light">
        <div class="container">
            <h2>Our {{ $category->name }} Service</h2>
            <p>We’re excited to bring you safe and professional driving services soon! Stay tuned for reliable transportation solutions tailored to your needs.</p>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">Back to Home</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: { delay: 2000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', dynamicBullets: true, clickable: true },
        });
    </script>
</body>
</html>
