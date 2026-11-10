@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-box">
    <h1>Arena Clash</h1>
    <p>Masuk untuk mengelola turnamen esports</p>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <label>Username</label>
        <input type="text" name="username" value="{{ old('username') }}" placeholder="Masukkan username">

        @error('username')
            <p class="error">Username wajib diisi (minimal 3 karakter)</p>
        @enderror

        <button type="submit">Masuk</button>
    </form>
</div>
@endsection
