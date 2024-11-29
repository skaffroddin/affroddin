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
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="text-center">
            <h1>Welcome to MyApp</h1>
            <?php if(auth()->guard()->check()): ?>
                <p class="lead">Hello, <?php echo e(Auth::user()->name); ?>! You are logged in.</p>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary">Go to Dashboard</a>
            <?php else: ?>
                <p class="lead">Welcome to our application. Please login or register to get started.</p>
                <a href="<?php echo e(route('login.form')); ?>" class="btn btn-primary me-2">Login</a>
                <a href="<?php echo e(route('register.form')); ?>" class="btn btn-secondary">Register</a>
            <?php endif; ?>
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
<?php /**PATH /home/affy/Desktop/Affroddin/resources/views/home.blade.php ENDPATH**/ ?>