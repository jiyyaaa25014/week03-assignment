<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --color-primary: #184C43;
            /* hijau tua elegan */
            --color-secondary: #AB7743;
            /* karamel hangat */
            --color-light: #F4E9D8;
            /* krem lembut */
            --color-background: #FFF9F4;
            /* putih gading */
            --color-text-dark: #2E2E2E;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text-dark);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Navbar */
        .navbar {
            background-color: var(--color-light);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-weight: 600;
            color: var(--color-primary) !important;
        }

        .nav-link {
            color: var(--color-secondary) !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--color-primary) !important;
        }

        /* Hero Section */
        .hero-section {
            background-color: var(--color-primary);
            padding: 80px 0;
        }

        .hero-section h1 {
            font-size: 2.75rem;
            color: var(--color-light);
        }

        .hero-section p {
            font-size: 1.25rem;
            color: var(--color-light);
        }

        .hero-section .btn-primary {
            background-color: var(--color-secondary);
            border-color: var(--color-secondary);
            color: #fff;
        }

        .hero-section .btn-primary:hover {
            background-color: var(--color-light);
            color: var(--color-primary);
            border-color: var(--color-light);
        }

        /* Category Cards */
        .category-card {
            border: none;
            text-align: center;
            padding: 20px;
            background-color: var(--color-secondary);
            border-radius: 10px;
            transition: transform .2s, box-shadow .2s;
            color: white;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(19, 18, 18, 0.3);
        }

        .category-card img {
            width: 70px;
            height: auto;
            margin-bottom: 10px;
        }

        .category-card h5 {
            font-size: 1.1rem;
            color: #fff;
        }

        /* Product Cards */
        .product-card {
            border: 1px solid var(--color-light);
            background-color: #fff;
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
            color: var(--color-primary);
        }

        .product-card .card-text {
            color: var(--color-secondary);
            font-weight: 600;
        }

        .btn-outline-secondary {
            color: var(--color-primary);
            border-color: var(--color-primary);
        }

        .btn-outline-secondary:hover {
            background-color: var(--color-primary);
            color: white;
        }

        /* Testimonials */
        .testimonial {
            background-color: var(--color-light);
        }

        .testimonial .card {
            border: none;
            background-color: #fff;
        }

        .testimonial .card p {
            font-style: italic;
            color: var(--color-primary);
        }

        .testimonial .card h6 {
            margin-top: 15px;
            font-weight: 600;
            color: var(--color-secondary);
        }

        /* Footer */
        .footer {
            background-color: var(--color-primary);
            color: #fff;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .footer a {
            color: var(--color-secondary);
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .footer small {
            display: block;
            margin-top: 10px;
            color: #fff;
            opacity: 0.8;
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>