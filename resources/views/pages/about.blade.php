@extends('layouts.app')
@section('title', 'About Us')

@section('content')
<div class="container py-5" style="background-color: var(--color-light); border-radius: 12px;">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('images/Poster.jpg') }}" class="img-fluid rounded shadow" alt="About Jeeycookie">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold" style="color: var(--color-dark);">About Jeeycookie</h2>
            <p style="color: var(--color-primary);">
                Welcome to <strong>Jeeycookie</strong>, your little corner of happiness in every bite.
                We believe that cookies aren’t just snacks — they’re comfort, warmth, and love made edible.
            </p>
            <p style="color: var(--color-dark);">
                At Jeeycookie, every batch is handcrafted with care using premium ingredients and our special homemade recipes.
                From chewy chocolate chips to soft butter cookies, each one is baked fresh to give you that perfect balance of sweetness and texture.
            </p>
            <p style="color: var(--color-primary);">
                We value quality, creativity, and joy in every creation — because every cookie should make you smile.
            </p>
            <p style="color: var(--color-dark);">
                Whether it’s for gifting, sharing, or simply treating yourself, Jeeycookie is here to sweeten your day, one cookie at a time.
            </p>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">← Back to Home</a>
        </div>
    </div>
</div>
@endsection