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
    @include('layouts.navbar') <!-- Include the navbar -->

    <div class="container mt-5">
        <h1>Welcome to your Dashboard, {{ Auth::user()->name }}!</h1>
        <p>Below is your profile information:</p>

        <!-- Profile Information -->
        <div class="card mt-4">
            <div class="card-header">
                <h5>Profile Information</h5>
            </div>
            <div class="card-body">
                <ul>
                    <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li><strong>Phone:</strong> {{ Auth::user()->phone }}</li>
                    <li><strong>Location:</strong> {{ Auth::user()->location }}</li>
                </ul>

                @if(Auth::user()->profile_picture)
                    <div class="mt-3">
                        <strong>Profile Picture:</strong><br>
                        <img src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="img-fluid" width="150">
                    </div>
                @else
                    <p class="mt-3">No profile picture uploaded yet.</p>
                @endif

                <!-- Buttons for Edit and Change Password -->
                <div class="mt-4">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    <a href="{{ route('profile.change-password.form') }}" class="btn btn-warning">Change Password</a>
                </div>
            </div>
        </div>

        <!-- Back to Home Button -->
        <div class="mt-4">
            <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
