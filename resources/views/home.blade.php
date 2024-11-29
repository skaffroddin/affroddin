<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="text-center">
            <h1>Welcome to MyApp</h1>
            @auth
                <p class="lead">Hello, {{ Auth::user()->name }}! You are logged in.</p>
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
            @else
                <p class="lead">Welcome to our application. Please login or register to get started.</p>
                <a href="{{ route('login.form') }}" class="btn btn-primary me-2">Login</a>
                <a href="{{ route('register.form') }}" class="btn btn-secondary">Register</a>
            @endauth
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 MyApp. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
