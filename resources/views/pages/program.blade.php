@extends('layouts.app')
@section('title', 'Program')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Program Kami</h2>

    <div class="row">
        {{-- Program 1 --}}
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/program1.jpg') }}" class="card-img-top" alt="Workshop Decoration Donut">
                <div class="card-body">
                    <h5 class="card-title">Workshop Decoration Donut</h5>
                    <p class="card-text">
                        Belajar menghias donat dengan berbagai topping dan warna menarik — cocok untuk pemula maupun yang ingin mengembangkan kreativitas baking.
                    </p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        {{-- Program 2 --}}
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/program2.jpg') }}" class="card-img-top" alt="Corporate Baking Experience">
                <div class="card-body">
                    <h5 class="card-title">Corporate Baking Experience</h5>
                    <p class="card-text">
                        Program khusus untuk acara kantor atau gathering tim — menciptakan momen seru dan kompak lewat kegiatan menghias kue bersama.
                    </p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        {{-- Program 3 --}}
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/program3.jpg') }}" class="card-img-top" alt="Promo Cookies & Donat">
                <div class="card-body">
                    <h5 class="card-title">Promo Cookies & Donat</h5>
                    <p class="card-text">
                        Dapatkan diskon spesial untuk varian cookies dan donat pilihan setiap minggu. Cocok untuk hadiah atau camilan sore.
                    </p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        {{-- Program 4 --}}
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/program4.jpg') }}" class="card-img-top" alt="Weekend Baking Class">
                <div class="card-body">
                    <h5 class="card-title">Weekend Baking Class</h5>
                    <p class="card-text">
                        Kelas santai di akhir pekan untuk belajar resep roti dan pastry favorit. Nikmati pengalaman membuat roti lembut dari nol.
                    </p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection