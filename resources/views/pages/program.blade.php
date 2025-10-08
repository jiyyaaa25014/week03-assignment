@extends('layouts.app')
@section('title', 'Program')

@section('content')
<div class="container py-5">
    <h2>Program</h2>
    @if ($id)
    <div class="mt-4">
        <h4>Detail Program – ID: {{ $id }}</h4>
        <p>Here you can put detail program (misalnya: paket berlangganan, workshop, kelas baking, dsb)</p>
    </div>
    @else
    <div class="row">
        @for ($i = 1; $i <= 4; $i++)
            <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/program' . $i . '.jpg') }}" class="card-img-top" alt="Program {{ $i }}">
                <div class="card-body">
                    <h5 class="card-title">Program {{ $i }}</h5>
                    <p class="card-text">Short description of program.</p>
                    <a href="{{ url('/program/'.$i) }}" class="btn btn-secondary btn-sm">Detail</a>
                </div>
            </div>
    </div>
    @endfor
</div>
@endif
</div>
@endsection