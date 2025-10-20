@extends('layouts.app')
@section('title', 'Payment')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Payment Methods</h2>

    <div class="row justify-content-center">
        <!-- Bank Transfer -->
        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow-sm h-100 text-center p-4">
                <img src="{{ asset('images/bank-jago.png') }}"
                    alt="Bank Jago"
                    class="mx-auto mb-3"
                    style="width: 120px;">
                <h5 class="fw-bold">Transfer Bank Jago</h5>
                <p class="text-muted">No. Rekening: <strong>1234 5678 9012</strong></p>
                <p class="text-muted">a.n. <strong>JeeyCookie</strong></p>
            </div>
        </div>

        <!-- QRIS -->
        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow-sm h-100 text-center p-4">
                <img src="{{ asset('images/qris-jeeycookie.png') }}"
                    alt="QRIS"
                    class="mx-auto mb-3"
                    style="width: 160px;">
                <h5 class="fw-bold">QRIS Payment</h5>
                <p class="text-muted">Scan QR untuk melakukan pembayaran</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <p class="text-muted">Setelah transfer, konfirmasi pembayaran melalui WhatsApp kami.</p>
        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success">
            Konfirmasi via WhatsApp
        </a>
    </div>
</div>
@endsection