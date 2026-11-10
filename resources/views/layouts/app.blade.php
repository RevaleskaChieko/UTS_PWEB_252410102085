<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Arena Clash</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @if (!isset($hideNav))
        <x-navbar :username="$username" />
    @endif

    <div class="container">
        @yield('content')
    </div>

    @if (!isset($hideNav))
        <x-footer />
    @endif
</body>
</html>
