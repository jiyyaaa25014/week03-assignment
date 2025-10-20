@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- Hero / Banner --}}
<section class="hero-section text-center d-flex align-items-center justify-content-center" style="min-height: 70vh;">
    <div class="container">
        <h1 class="fw-bold" style="color: var(--color-light);">Jeeycookie Homemade Baked</h1>
        <p class="lead" style="color: var(--color-light);">Fresh breads & sweet treats baked daily with love.</p>
        <a href="#products" class="btn mt-3 px-4 py-2" style="background-color: var(--color-primary); color: #fff;">Shop Now</a>
    </div>
</section>

{{-- Kategori Produk --}}
<section class="py-5" style="background-color: var(--color-light);">
    <div class="container text-center">
        <h2 class="fw-bold mb-4" style="color: var(--color-dark);">Kategori Produk</h2>
        <div class="row">
            @foreach ([
            ['name' => 'Soes Jadoel', 'img' => 'Soes jadoel.jpg'],
            ['name' => 'Donat', 'img' => 'Dounat.jpg'],
            ['name' => 'Cookies', 'img' => 'cookies.jpg'],
            ['name' => 'Cake', 'img' => 'cake.jpg'],
            ] as $cat)
            <div class="col-6 col-md-3 mb-4">
                <div class="card category-card text-center">
                    <img src="{{ asset('images/' . $cat['img']) }}" class="img-fluid rounded mb-2" alt="{{ $cat['name'] }}">
                    <h5>{{ $cat['name'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Trending Products --}}
<section id="products" class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center" style="color: var(--color-dark);">Trending Products</h2>
        <div class="row justify-content-center">
            @foreach ([
            ['name' => 'Soes Jadoel', 'img' => 'Soes jadoel.jpg', 'price' => 30000],
            ['name' => 'Donat', 'img' => 'Dounat.jpg', 'price' => 5000],
            ['name' => 'Cookies', 'img' => 'cookies.jpg', 'price' => 15000],
            ['name' => 'Cake', 'img' => 'cake.jpg', 'price' => 25000],
            ] as $product)
            <div class="col-md-3 mb-4">
                <div class="card product-card h-100">
                    <img src="{{ asset('images/' . $product['img']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text" style="color: var(--color-accent); font-weight:600;">
                            Rp {{ number_format($product['price'], 0, ',', '.') }}
                        </p>
                        <a href="#" class="btn btn-sm" style="background-color: var(--color-primary); color:#fff;">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonial --}}
<section class="py-5" style="background-color: var(--color-light);">
    <div class="container text-center">
        <h2 class="fw-bold mb-4" style="color: var(--color-dark);">What Our Customers Say</h2>
        <div class="row justify-content-center">
            @for ($i = 1; $i <= 3; $i++)
                <div class="col-md-4 mb-4">
                <div class="card testimonial p-4 h-100 shadow-sm">
                    <p class="mb-3">“The bread is so fresh and the flavor is amazing. Highly recommend!”</p>
                    <h6 class="fw-semibold" style="color: var(--color-primary);">Customer {{ $i }}</h6>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

{{-- Recent News / Blog --}}
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center" style="color: var(--color-dark);">Recent News</h2>
        <div class="row">
            @foreach ([
            [
            'title' => 'Promo Bundling Donat — 2 Box cuma Rp26.000!',
            'img' => 'Dounat.jpg',
            'desc' => 'Spesial minggu ini! Nikmati promo bundling donat manis kami. Beli 2 box hanya Rp26.000 aja 😋. Cocok buat teman ngopi atau cemilan sore bareng keluarga.'
            ],
            [
            'title' => 'Varian Baru! Soes Jadoel Rasa Coklat 🍫',
            'img' => 'Soes jadoel.jpg',
            'desc' => 'Buat kamu pecinta coklat, sekarang Soes Jadoel hadir dengan varian rasa baru — isi coklat lumer yang bikin nagih! Tekstur lembut di luar, manis pas di lidah.'
            ],
            [
            'title' => 'Introducing Our New Cookies Variant 🍪',
            'img' => 'cookies.jpg',
            'desc' => 'Kami punya varian cookies terbaru — renyah di luar, lembut di dalam! Coklat chip-nya melimpah, cocok untuk kamu yang suka manis tapi tetap ringan.'
            ],
            ] as $post)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/' . $post['img']) }}" class="card-img-top" alt="{{ $post['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--color-dark);">{{ $post['title'] }}</h5>
                        <p class="card-text">{{ $post['desc'] }}</p>
                        <a href="#" class="fw-semibold" style="color: var(--color-primary); text-decoration: none;">Read More →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection