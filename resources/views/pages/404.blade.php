@extends('layouts.app')
@section('title', '404 Not Found')

@section('content')
<div class="container text-center py-5">
    <h1>404</h1>
    <h3>Oops! Page Not Found</h3>
    <p>Maaf, halaman yang Anda cari tidak ditemukan.</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali ke Home</a>
</div>
@endsection