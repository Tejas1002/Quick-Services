<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Quick Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --text-color: #ffffff;
            --error-color: #ff4d4d;
            --shadow-color: rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            overflow: hidden;
            position: relative;
        }

        /* Animated background particles */
        .background-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .background-particles::before {
            content: '';
            position: absolute;
            width: 2px;
            height: 2px;
            background: rgba(255, 255, 255, 0.3);
            animation: particle 10s linear infinite;
        }

        @keyframes particle {
            0% { transform: translate(0, 0); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translate(100vw, 100vh); opacity: 0; }
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px var(--shadow-color);
            width: 100%;
            max-width: 420px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 1;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-container h2 {
            margin-bottom: 2rem;
            color: var(--text-color);
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .login-container h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--text-color);
            border-radius: 2px;
        }

        .nav-tabs {
            margin-bottom: 1.5rem;
        }

        .nav-tabs .nav-link {
            color: var(--text-color);
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 10px 10px 0 0;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: var(--text-color);
            font-weight: 600;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 12px 15px 12px 40px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--text-color);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
        }

        .text-danger {
            color: var(--error-color) !important;
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .text-center a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .text-center a:hover {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: underline;
        }

        label {
            color: var(--text-color);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 8px;
            text-align: left;
            display: block;
        }

        p {
            color: var(--text-color);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="background-particles"></div>
    <div class="login-container">
        <h2>Login</h2>
        <!-- Tabs for User and Admin Login -->
        <ul class="nav nav-tabs" id="loginTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-login" type="button" role="tab" aria-controls="user-login" aria-selected="true">User Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin-login" type="button" role="tab" aria-controls="admin-login" aria-selected="false">Admin Login</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="loginTabContent">
            <!-- User Login Form -->
            <div class="tab-pane fade show active" id="user-login" role="tabpanel" aria-labelledby="user-tab">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="position-relative">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="position-relative">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p class="text-center mt-4">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                </form>
            </div>

            <!-- Admin Login Form -->
            <div class="tab-pane fade" id="admin-login" role="tabpanel" aria-labelledby="admin-tab">
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="admin-email">Email Address</label>
                        <div class="position-relative">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" name="email" id="admin-email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="admin-password">Password</label>
                        <div class="position-relative">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" name="password" id="admin-password" class="form-control" required>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group form-check mb-3">
                        <input type="checkbox" name="remember" id="admin-remember" class="form-check-input">
                        <label for="admin-remember" class="form-check-label text-light">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Admin Login</button>
                    <p class="text-center mt-4">Forgot your admin password? Contact support.</p>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js for tab functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
