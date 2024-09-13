<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftSisPro Post</title>
    <link rel="icon" href="{{ asset('image/favicon.png') }}">
    <!-- Styles Iconos FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Styles Laravel y Propios -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css'])
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('image/logo_empresa.jpg') }}" alt="Mis Post" class="h-16">
                </a>
                <form action="{{ route('home') }}" method="GET" class="flex-grow">
                    <input type="text" name="search" placeholder="Buscar" value="{{ request('search') }}"
                        class="border border-gray-200 rounded-lg bg-gray-100 py-2 px-3 w-1/3">
                </form>
            </div>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Iniciar sesión</a>
            @endauth
        </header>
        <div class="opacity-60 h-px mb-8 linear"></div>
        @yield('content')
        <p class="py-16">
            <img src="{{ asset('image/logo_empresa.jpg') }}" alt="Mis Post" class="h-16 mx-auto">
        </p>
    </div>
</body>
</html>
