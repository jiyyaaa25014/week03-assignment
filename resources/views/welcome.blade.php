<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Laravel + Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="hero">
        <h1 class="mb-3 fw-bold text-primary">Welcome to Laravel 🚀</h1>
        <p class="lead text-muted mb-4">Now styled with Bootstrap 5!</p>

        <div class="d-flex gap-3">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="btn btn-primary px-4">Home</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary px-4">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-primary px-4">Register</a>
            @endif
            @endauth
            @endif
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>