<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Include the navbar -->

    <div class="container mt-5">
        <h1>Welcome to your Dashboard, <?php echo e(Auth::user()->name); ?>!</h1>
        <p>Below is your profile information:</p>

        <!-- Profile Information -->
        <div class="card mt-4">
            <div class="card-header">
                <h5>Profile Information</h5>
            </div>
            <div class="card-body">
                <ul>
                    <li><strong>Name:</strong> <?php echo e(Auth::user()->name); ?></li>
                    <li><strong>Email:</strong> <?php echo e(Auth::user()->email); ?></li>
                    <li><strong>Phone:</strong> <?php echo e(Auth::user()->phone); ?></li>
                    <li><strong>Location:</strong> <?php echo e(Auth::user()->location); ?></li>
                </ul>

                <?php if(Auth::user()->profile_picture): ?>
                    <div class="mt-3">
                        <strong>Profile Picture:</strong><br>
                        <img src="<?php echo e(asset('storage/profile_pictures/' . Auth::user()->profile_picture)); ?>" alt="Profile Picture" class="img-fluid" width="150">
                    </div>
                <?php else: ?>
                    <p class="mt-3">No profile picture uploaded yet.</p>
                <?php endif; ?>

                <!-- Buttons for Edit and Change Password -->
                <div class="mt-4">
                    <a href="<?php echo e(route('profile.edit')); ?>" class="btn btn-primary">Edit Profile</a>
                    <a href="<?php echo e(route('profile.change-password.form')); ?>" class="btn btn-warning">Change Password</a>
                </div>
            </div>
        </div>

        <!-- Back to Home Button -->
        <div class="mt-4">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Back to Home</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /home/affy/Desktop/Affroddin/resources/views/dashboard.blade.php ENDPATH**/ ?>