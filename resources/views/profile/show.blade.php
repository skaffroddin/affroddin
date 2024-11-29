@extends('layouts.app')

@section('content')
<h1>Edit Profile</h1>

<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" name="location" value="{{ $user->location }}">
    </div>
    <div class="mb-3">
        <label for="profile_picture" class="form-label">Profile Picture</label>
        <input type="file" class="form-control" name="profile_picture">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>
@endsection
