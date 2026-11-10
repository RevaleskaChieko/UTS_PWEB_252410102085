@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<h1>Pengelolaan Turnamen</h1>
<p>Data tim dan jadwal pertandingan</p>

<h2>Daftar Tim</h2>
<div class="table-box">
    <table>
        <tr>
            <th>No</th>
            <th>Nama Tim</th>
            <th>Game</th>
            <th>Kapten</th>
            <th>Status</th>
        </tr>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $team['nama'] }}</td>
                <td>{{ $team['game'] }}</td>
                <td>{{ $team['kapten'] }}</td>
                <td>{{ $team['status'] }}</td>
            </tr>
        @endforeach
    </table>
</div>

<h2>Jadwal Match</h2>
<div class="grid">
    @foreach ($matches as $match)
        <div class="card match">
            <p>{{ $match['game'] }}</p>
            <h3>{{ $match['tim_a'] }} vs {{ $match['tim_b'] }}</h3>
            <p>{{ $match['tanggal'] }} - {{ $match['jam'] }} WIB</p>
            <p>Status: {{ $match['status'] }}</p>
        </div>
    @endforeach
</div>
@endsection
