<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('admin.layouts.nav')
<nav>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
