<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Quick Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --text-color: #ffffff;
            --error-color: #ff4d4d;
            --shadow-color: rgba(0, 0, 0, 0.3);
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif, -apple-system, BlinkMacSystemFont;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            overflow: hidden;
            position: relative;
            margin: 0;
            padding: 0;
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
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
        }

        @keyframes particle {
            0% { transform: translate(0, 0); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translate(100vw, 100vh); opacity: 0; }
        }

        .container {
            position: relative;
            z-index: 1;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 32px var(--shadow-color);
            overflow: hidden;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--text-color);
            font-weight: 600;
            text-align: center;
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-body {
            padding: 2rem;
        }

        .form-label {
            color: var(--text-color);
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
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

        .form-check-label {
            color: var(--text-color);
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 10px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 8px 15px;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            color: var(--text-color);
            transform: translateY(-1px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .alert {
            border-radius: 10px;
            margin-bottom: 1.5rem;
        }

        .alert-danger {
            background: rgba(255, 77, 77, 0.2);
            color: var(--error-color);
            border: 1px solid rgba(255, 77, 77, 0.5);
        }
    </style>
</head>
<body>
    <div class="background-particles"></div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Admin Login</div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <!-- Home Page Button -->
                        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
