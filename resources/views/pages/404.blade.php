@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
<div class="container text-center py-5" style="min-height: 70vh;">
    <h1 style="font-size: 6rem; font-weight: 700; color: var(--color-accent);">404</h1>
    <h3 style="color: var(--color-dark); font-weight: 600;">Oops! Halaman Tidak Ditemukan</h3>
    <p style="color: var(--color-primary); font-size: 1.1rem;">
        Maaf, halaman yang kamu cari mungkin sudah dihapus atau tidak tersedia.
    </p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3"
        style="background-color: var(--color-primary); border-color: var(--color-primary);">
        ← Kembali ke Beranda
    </a>
</div>
@endsection