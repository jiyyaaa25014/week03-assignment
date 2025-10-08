@extends('layouts.app')
@section('title', 'About Us')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('images/Poster.jpg') }}" class="img-fluid rounded" alt="About Jeeycookie">
        </div>
        <div class="col-md-6">
            <h2>About Jeeycookie</h2>
            <p>Welcome to Jeeycookie, your little corner of happiness in every bite. We believe that cookies arent just snacks theyre comfort, warmth, and love made edible.</p>
            <p>At Jeeycookie, every batch is handcrafted with care using premium ingredients and our special homemade recipes. From chewy chocolate chips to soft butter cookies,
                each one is baked fresh to give you that perfect balance of sweetness and texture.</p>
            <p>We value quality, creativity, and joy in every creation — because every cookie should make you smile.</p>
            <p>Whether it’s for gifting, sharing, or simply treating yourself, Jeeycookie is here to sweeten your day, one cookie at a time.</p>
        </div>
    </div>
</div>
@endsection