<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Selamat datang! Senang kamu berkunjung!</h1>
    <p>Halo, {{ $nama }}!</p>

    <h3>Hobi:</h3>
    <ul>
        @foreach ($hobbies as $h)
            <li>{{ $h }}</li>
        @endforeach
    </ul>

    <nav>
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/profile') }}">Profile</a>
    </nav>
</body>
</html>
