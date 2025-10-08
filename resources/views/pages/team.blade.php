@extends('layouts.app')
@section('title', 'Team')

@section('content')
<div class="container py-5">
    <h2>Our Team</h2>
    <div class="row">
        @foreach ([
        ['name' => 'Latifah fauzia', 'img' => 'team1.jpg', 'role' => 'Baker'],
        ['name' => 'Jihan aqilla', 'img' => 'team3.jpg', 'role' => 'Manager'],
        ] as $member)
        <div class="col-6 col-md-3 text-center mb-4">
            <img src="{{ asset('images/team1' . $member['img']) }}" class="rounded-circle mb-2" alt="{{ $member['name'] }}" width="120" height="120">
            <h5>{{ $member['name'] }}</h5>
            <p>{{ $member['role'] }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection