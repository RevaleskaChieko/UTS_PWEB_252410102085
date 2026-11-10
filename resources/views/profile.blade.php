@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<h1>Profil</h1>

<div class="card">
    <h2>{{ $username }}</h2>
    <p>Admin Turnamen</p>
</div>

<div class="card">
    <h3>Informasi Turnamen</h3>
    <table>
        @foreach ($info as $label => $value)
            <tr>
                <td>{{ $label }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
