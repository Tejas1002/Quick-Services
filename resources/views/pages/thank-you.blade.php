<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Quick Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #5B21B6; /* Deep purple for sophistication */
            --primary-dark: #4C1D95;
            --primary-light: rgba(91, 33, 182, 0.1);
            --accent: #14B8A6; /* Teal for freshness */
            --accent-hover: #0D9488;
            --dark: #1F2937;
            --darker: #111827;
            --gray: #6B7280;
            --light-gray: #F1F5F9;
            --lighter-gray: #F8FAFC;
            --white: #FFFFFF;
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.1);
            --shadow-lg: 0 8px 24px rgba(0,0,0,0.15);
            --transition: all 0.3s ease-in-out;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--lighter-gray);
            color: var(--dark);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }

        .main-container {
            width: 100%;
            max-width: 80%;
            margin: 2rem;
            perspective: 1000px;
        }

        .thank-you-card {
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            position: relative;
            width: 100%;
            display: flex;
            flex-direction: row;
            transition: var(--transition);
            overflow: hidden;
            border: 1px solid rgba(91, 33, 182, 0.05);
        }

        .thank-you-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg), 0 12px 32px rgba(91, 33, 182, 0.1);
        }

        .left-panel, .right-panel {
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .left-panel {
            background: var(--white);
            border-right: 1px solid rgba(0,0,0,0.05);
        }

        .right-panel {
            background: var(--light-gray);
        }

        .success-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            z-index: 10;
        }

        .success-icon:hover {
            transform: scale(1.1);
            background: var(--primary-dark);
        }

        .success-icon i {
            color: var(--white);
            font-size: 1rem;
        }

        /* Logo Section */
        .logo-section {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .logo-section img {
            max-width: 60px;
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .logo-section img:hover {
            transform: scale(1.05);
        }

        .logo-section h1 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0;
        }

        .logo-section p {
            font-size: 0.75rem;
            color: var(--gray);
            margin: 0.25rem 0 0;
        }

        /* Payment Info Section */
        .payment-info {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .payment-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
            color: var(--darker);
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .payment-subtitle {
            font-size: 0.85rem;
            color: var(--gray);
            margin: 0.5rem 0 1rem;
        }

        .total-payment {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            margin: 0.5rem auto 1rem;
            padding: 0.5rem 1.25rem;
            background: var(--primary-light);
            border-radius: 10px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .total-payment:hover {
            transform: scale(1.03);
            box-shadow: var(--shadow-md);
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
            width: 100%;
            max-width: 320px;
            margin: 0 auto;
        }

        .detail-item {
            padding: 0.75rem;
            background: var(--white);
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .detail-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .detail-item span {
            color: var(--gray);
            font-size: 0.65rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        .detail-item strong {
            color: var(--dark);
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Feedback Section */
        .feedback-section {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .feedback-title {
            font-size: 1.3rem;
            text-align: center;
            margin-bottom: 1rem;
            font-weight: 700;
            color: var(--darker);
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .star-rating {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            font-size: 1.6rem;
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition);
        }

        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #FBBF24; /* Warm amber for stars */
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid rgba(0,0,0,0.08);
            border-radius: 8px;
            font-size: 0.85rem;
            transition: var(--transition);
            background: var(--white);
            box-shadow: var(--shadow-sm);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(91, 33, 182, 0.15);
        }

        textarea.form-control {
            resize: none;
            height: 70px;
        }

        .buttons-container {
            display: flex;
            gap: 0.75rem;
            margin-top: auto;
        }

        .btn {
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            flex: 1;
            box-shadow: var(--shadow-sm);
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background: var(--accent);
            color: var(--white);
            text-decoration: none;
        }

        .btn-secondary:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Thank You Message */
        .thank-you-message {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition);
            transform: scale(0.98);
            text-align: center;
            z-index: 20;
            border-radius: 16px;
            backdrop-filter: blur(5px);
        }

        .thank-you-message.active {
            opacity: 1;
            pointer-events: all;
            transform: scale(1);
        }

        .thank-you-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 1rem;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.5); }
            100% { opacity: 1; transform: scale(1); }
        }

        .thank-you-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--darker);
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .thank-you-text {
            color: var(--gray);
            margin-bottom: 1rem;
            font-size: 0.85rem;
            max-width: 80%;
        }

        .btn-continue {
            background: var(--primary);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .btn-continue:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Responsive Design */
        @media (max-width: 850px) {
            .thank-you-card {
                flex-direction: column;
                max-width: 550px;
                margin: 0 auto;
            }

            .left-panel {
                border-right: none;
                border-bottom: 1px solid rgba(0,0,0,0.05);
            }
        }

        @media (max-width: 600px) {
            .main-container {
                margin: 1rem;
            }

            .left-panel, .right-panel {
                padding: 1.5rem;
            }

            .logo-section img {
                max-width: 50px;
            }

            .logo-section h1 {
                font-size: 1.2rem;
            }

            .details-grid {
                grid-template-columns: 1fr;
                max-width: 280px;
            }

            .star-rating label {
                font-size: 1.4rem;
            }

            .buttons-container {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="thank-you-card">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>

            <!-- Left Panel for Feedback Form -->
            <div class="left-panel">
                <div class="feedback-section">
                    <h3 class="feedback-title">We Value Your Feedback</h3>
                    <form id="feedbackForm" action="{{ route('feedback.submit', $order->id) }}" method="POST">
                        @csrf
                        <div class="star-rating">
                            <input type="radio" name="rating" id="star5" value="5" required>
                            <label for="star5"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" id="star4" value="4">
                            <label for="star4"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" id="star3" value="3">
                            <label for="star3"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" id="star2" value="2">
                            <label for="star2"><i class="fas fa-star"></i></label>
                            <input type="radio" name="rating" id="star1" value="1">
                            <label for="star1"><i class="fas fa-star"></i></label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name (optional)" value="{{ auth()->check() ? auth()->user()->name : '' }}">
                        </div>

                        <div class="form-group">
                            <textarea name="comment" class="form-control" placeholder="Tell us about your experience..." required></textarea>
                        </div>

                        <div class="buttons-container">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Submit
                            </button>

                            <a href="{{ route('order.download-receipt', $order->id) }}" class="btn btn-secondary">
                                <i class="fas fa-download"></i> Receipt
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Panel for Payment Details -->
            <div class="right-panel">
                <div class="logo-section">
                    <img src="{{ asset('images/hd logo.png') }}" alt="Quick Services Logo">
                    <h1>Quick Services</h1>
                    <p>Fast. Reliable. Professional.</p>
                </div>

                <div class="payment-info">
                    <h2 class="payment-title">Payment Successful</h2>
                    <p class="payment-subtitle">Thank you for your trust!</p>

                    <div class="total-payment">
                        ₹{{ number_format($order->total_amount, 2) }}
                    </div>

                    <div class="details-grid">
                        <div class="detail-item">
                            <span>Ref Number</span>
                            <strong>{{ str_pad($order->id, 10, '0', STR_PAD_LEFT) }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Payment Time</span>
                            <strong>{{ $order->created_at->format('d M Y, H:i') }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Method</span>
                            <strong>{{ ucfirst($order->payment_method) }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Sender</span>
                            <strong>{{ $order->name }}</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thank You Message -->
            <div class="thank-you-message" id="thankYouMessage">
                <div class="thank-you-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 class="thank-you-title">Thank You!</h3>
                <p class="thank-you-text">Your feedback means a lot to us.</p>
                <a href="/" class="btn-continue">
                    <i class="fas fa-arrow-right"></i> Explore More
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            sessionStorage.removeItem('cart');

            $('#feedbackForm').on('submit', function(e) {
                e.preventDefault();

                const form = $(this);
                const url = form.attr('action');
                const formData = form.serialize();

                const rating = $('input[name="rating"]:checked').val();
                const comment = $('textarea[name="comment"]').val().trim();

                if (!rating || !comment) {
                    alert('Please provide a rating and comment.');
                    return;
                }

                const submitBtn = form.find('button[type="submit"]');
                submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
                submitBtn.prop('disabled', true);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#thankYouMessage').addClass('active');
                    },
                    error: function(xhr) {
                        alert('An error occurred. Please try again.');
                        submitBtn.html('<i class="fas fa-paper-plane"></i> Submit');
                        submitBtn.prop('disabled', false);
                    }
                });
            });
        });
    </script>
</body>
</html>
