@props(['username'])

<div class="navbar">
    <a href="{{ route('dashboard', ['username' => $username]) }}" class="brand">Arena Clash</a>

    <div class="menu">
        <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
        <a href="{{ route('profile', ['username' => $username]) }}">Profil</a>
        <a href="{{ route('login') }}">Keluar</a>
    </div>
</div>
