@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<div class="container py-5" style="background-color: var(--color-light); border-radius: 12px;">
    <h2 class="fw-bold mb-4 text-center" style="color: var(--color-dark);">Contact Us</h2>

    <div class="row justify-content-center">
        {{-- Form Kontak --}}
        <div class="col-md-6 mb-5">
            <form action="{{ route('contact.send') }}" method="POST" class="p-4 shadow rounded" style="background-color: #fff;">
                <div class="mb-3">
                    <label for="name" class="form-label" style="color: var(--color-dark);">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="color: var(--color-dark);">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label" style="color: var(--color-dark);">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
                </div>
                <div class="d-grid">
                    <button class="btn" type="submit" style="background-color: var(--color-primary); color: #fff;">Kirim Pesan</button>
                </div>
            </form>


            {{-- Informasi Kontak --}}
            <div class="col-md-5 d-flex flex-column justify-content-center ps-md-5">
                <h5 class="fw-bold" style="color: var(--color-dark);">Lokasi & Kontak</h5>
                <p style="color: var(--color-primary);">
                    📍 Jl. Pakis, RT.8/RW.5, Griya Pakis No.10-B, Kel. Beji, Kota Depok, Jawa Barat
                </p>
                <p style="color: var(--color-dark);">
                    ✉️ Email: <a href="mailto:Jeeycookie@12.com" style="color: var(--color-primary); text-decoration: none;">Jeeycookie@12.com</a>
                </p>
                <p style="color: var(--color-dark);">
                    ☎️ Telepon: <a href="tel:+6285210567503" style="color: var(--color-primary); text-decoration: none;">+62 852-1056-7503</a>
                </p>
            </div>
        </div>
    </div>
    @endsection