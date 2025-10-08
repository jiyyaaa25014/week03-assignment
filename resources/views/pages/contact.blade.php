@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <h2>Contact Us</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <form action="#" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Kirim Pesan</button>
            </form>
        </div>
        <div class="col-md-6">
            <h5>Lokasi & Kontak</h5>
            <p>Alamat: Jl. Pakis, RT.8/RW.5, Griya Pakis No.10-B, Kel. Beji, Kota Depok, Jawa Barat</p>
            <p>Email: Jeeycookie@12.com</p>
            <p>Telepon: +62 85210567503</p>
        </div>
    </div>
</div>
@endsection