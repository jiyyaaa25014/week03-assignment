<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- Google Fonts (opsional) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .navbar {
            background-color: #ffffff;
        }

        .navbar-brand {
            font-weight: 600;
            color: #333 !important;
        }

        .nav-link {
            color: #555 !important;
        }

        .nav-link:hover {
            color: #dcae66 !important;
        }

        .hero-section {
            background-color: #fdf8f3;
            padding: 80px 0;
        }

        .hero-section h1 {
            font-size: 2.75rem;
            color: #333;
        }

        .hero-section p {
            font-size: 1.25rem;
            color: #666;
        }

        .hero-section .btn-primary {
            background-color: #dcae66;
            border-color: #dcae66;
        }

        .hero-section .btn-primary:hover {
            background-color: #c49e5a;
            border-color: #c49e5a;
        }

        .category-card {
            border: none;
            text-align: center;
            padding: 20px;
            transition: transform .2s;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-card img {
            width: 60px;
            height: auto;
            margin-bottom: 10px;
        }

        .category-card h5 {
            font-size: 1.1rem;
            color: #444;
        }

        .product-card {
            border: 1px solid #eee;
            transition: box-shadow .2s;
        }

        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            object-fit: cover;
            height: 200px;
        }

        .product-card .card-body {
            text-align: center;
        }

        .product-card .card-title {
            font-size: 1.15rem;
        }

        .product-card .card-text {
            color: #d9534f;
            /* merah untuk harga (ubah sesuai tema) */
            font-weight: 600;
        }

        .testimonial {
            background-color: #fff;
        }

        .testimonial .card {
            border: none;
        }

        .testimonial .card p {
            font-style: italic;
        }

        .testimonial .card h6 {
            margin-top: 15px;
            font-weight: 600;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .footer a {
            color: #555;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>

    @stack('styles')
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>