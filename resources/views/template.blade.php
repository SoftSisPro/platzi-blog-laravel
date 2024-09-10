<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
</head>
<body>
    <p>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>

        @auth
            <a href="{{ route('dashboard') }}">Admin</a>
        @else
            <a href="{{ route('login') }}">Iniciar sesión</a>
        @endauth
    </p>
    <hr>
    @yield('content')
</body>
</html>
