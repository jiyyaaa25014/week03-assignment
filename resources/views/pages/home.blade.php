@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- Hero / banner --}}
<section class="hero-section text-center">
    <div class="container">
        <h1>Jeeycookie Homade baked</h1>
        <p>Fresh breads & sweet treats baked daily with love.</p>
        <a href="#products" class="btn btn-primary mt-3">Shop Now</a>
    </div>
</section>

{{-- Kategori --}}
<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Kategori Produk</h2>
        <div class="row">
            @foreach ([
            ['name' => 'Soes Jadoel', 'img' => 'Soes jadoel.jpg'],
            ['name' => 'Donat', 'img' => 'Dounat.jpg'],
            ['name' => 'Cookies', 'img' => 'cookies.jpg'],
            ['name' => 'Cake', 'img' => 'cake.jpg'],
            ] as $cat)
            <div class="col-6 col-md-3 mb-4">
                <div class="card category-card text-center p-3">
                    <img src="{{ asset('images/' . $cat['img']) }}"
                        class="img-fluid rounded mb-2"
                        alt="{{ $cat['name'] }}">
                    <h5>{{ $cat['name'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Trending Products --}}
<section id="products" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4">Trending Products</h2>
        <div class="row">
            @foreach ([
            ['name' => 'Soes Jadoel', 'img' => 'Soes jadoel.jpg', 'price' => 30000],
            ['name' => 'Donat', 'img' => 'Dounat.jpg', 'price' => 5000],
            ['name' => 'Cookies', 'img' => 'cookies.jpg', 'price' => 15000],
            ['name' => 'Cake', 'img' => 'cake.jpg', 'price' => 25000],
            ] as $product)
            <div class="col-md-3 mb-4">
                <div class="card product-card h-100">
                    <img src="{{ asset('images/' . $product['img']) }}"
                        class="card-img-top"
                        alt="{{ $product['name'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonial / Review --}}
<section class="py-5">
    <div class="container">
        <h2 class="mb-4">What Our Customers Say</h2>
        <div class="row">
            @for ($i = 1; $i <= 3; $i++)
                <div class="col-md-4 mb-4">
                <div class="card testimonial p-4 h-100">
                    <p>"The bread is so fresh and the flavor is amazing. Highly recommend!"</p>
                    <h6>Customer {{ $i }}</h6>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

{{-- Recent News / Blog --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4">Recent News</h2>
        <div class="row">
            {{-- Post 1 --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/Dounat.jpg') }}" class="card-img-top" alt="Promo Bundling Donat">
                    <div class="card-body">
                        <h5 class="card-title">Promo Bundling Donat — 2 Box cuma Rp26.000!</h5>
                        <p class="card-text">
                            Spesial minggu ini! Nikmati promo bundling donat manis kami.
                            Beli 2 box hanya Rp26.000 aja 😋.
                            Cocok buat teman ngopi atau cemilan sore bareng keluarga.
                        </p>
                        <a href="#" class="text-decoration-none fw-semibold">Read More →</a>
                    </div>
                </div>
            </div>

            {{-- Post 2 --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/Soes jadoel.jpg') }}" class="card-img-top" alt="Varian Baru Soes Jadoel Coklat">
                    <div class="card-body">
                        <h5 class="card-title">Varian Baru! Soes Jadoel Rasa Coklat 🍫</h5>
                        <p class="card-text">
                            Buat kamu pecinta coklat, sekarang Soes Jadoel hadir
                            dengan varian rasa baru — isi coklat lumer yang bikin nagih!
                            Tekstur lembut di luar, manis pas di lidah.
                        </p>
                        <a href="#" class="text-decoration-none fw-semibold">Read More →</a>
                    </div>
                </div>
            </div>

            {{-- Post 3 --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/cookies.jpg') }}" class="card-img-top" alt="New Cookies Variant">
                    <div class="card-body">
                        <h5 class="card-title">Introducing Our New Cookies Variant 🍪</h5>
                        <p class="card-text">
                            Kami punya varian cookies terbaru — renyah di luar,
                            lembut di dalam!
                            Coklat chip-nya melimpah, cocok untuk kamu yang suka manis tapi tetap ringan.
                        </p>
                        <a href="#" class="text-decoration-none fw-semibold">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection