<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Rugs Gallerie | Handmade Carpets</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Rugs Gallerie</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/carpets">Carpets</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="/inquiry">Inquiry</a></li>

            <!-- Language Switch -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('lang/en') }}">EN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('lang/hi') }}">हिंदी</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © {{ date('Y') }} Rugs Gallerie | Handmade Carpet Exporter
</footer>

</body>
</html>
