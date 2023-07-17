@extends('layouts.app')

@section('content')
    <h1>Welcome to Your User Dashboard</h1>
    <h1>Welcome, {{ Auth::user()->name }}!</h1>
    <p>Email: {{ Auth::user()->email }}</p>
<!-- Add more user-specific information as needed -->
<a href="{{ route('blogs.index') }}">My Blog</a>
<!-- Add more links or buttons as needed -->
<h2>Recent Activity</h2>
<ul>
    <li>Your recent blog post was published</li>
    <li>You received a new message</li>
    <!-- Add more recent activities or notifications as needed -->
</ul>

@endsection
