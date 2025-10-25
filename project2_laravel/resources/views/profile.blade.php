<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profil</h1>
    <p>Halo, {{ $name ? $name : 'Tamu' }}!</p>

    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a>
    </nav>
</body>
</html>
