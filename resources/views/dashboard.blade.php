@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Selamat datang, {{ $username }}</h1>
<p>Ringkasan turnamen Arena Clash Season 1</p>

<div class="grid">
    @foreach ($stats as $stat)
        @include('partials.stat-card', ['stat' => $stat])
    @endforeach
</div>

<h2>Match Terdekat</h2>
<div class="grid">
    @foreach ($upcoming as $match)
        <div class="card match">
            <p>{{ $match['game'] }}</p>
            <h3>{{ $match['tim_a'] }} vs {{ $match['tim_b'] }}</h3>
            <p>{{ $match['tanggal'] }} - {{ $match['jam'] }} WIB</p>
        </div>
    @endforeach
</div>
@endsection
